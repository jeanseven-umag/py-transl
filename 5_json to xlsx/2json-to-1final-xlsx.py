import json
import openpyxl
from openpyxl import Workbook

def extract_keys_with_values(data, parent_key=''):
    """
    Рекурсивно извлекает ключи и значения из JSON-структуры.
    Возвращает словарь вида {'ключ.через.точку': значение}
    """
    result = {}
    for key, value in data.items():
        new_key = f"{parent_key}.{key}" if parent_key else key
        if isinstance(value, dict):
            result.update(extract_keys_with_values(value, new_key))
        else:
            result[new_key] = value
    return result

def create_comparison_xlsx(ru_data, en_data, output_file):
    """
    Создает XLSX-файл с сравнением значений из двух JSON-файлов
    """
    # Извлекаем данные из JSON
    ru_flattened = extract_keys_with_values(ru_data)
    en_flattened = extract_keys_with_values(en_data)

    # Создаем новую книгу Excel
    wb = Workbook()
    ws = wb.active
    ws.title = "JSON Comparison"

    # Заголовки столбцов
    headers = ["Key", "ru-RU Value", "en-US Value"]
    ws.append(headers)

    # Заполняем данные
    for key in sorted(ru_flattened.keys()):
        ru_value = ru_flattened.get(key, "")
        en_value = en_flattened.get(key, "")
        ws.append([key, ru_value, en_value])

    # Настраиваем ширину столбцов
    for column in ['A', 'B', 'C']:
        max_length = 0
        for cell in ws[column]:
            try:
                if len(str(cell.value)) > max_length:
                    max_length = len(str(cell.value))
            except:
                pass
        adjusted_width = (max_length + 2)
        ws.column_dimensions[column].width = adjusted_width

    # Сохраняем файл
    wb.save(output_file)
    print(f"Файл сравнения сохранен как: {output_file}")

def main():
    # Загрузка JSON-файлов
    ru_file = "ru-RU.json"
    en_file = "en-US.json"
    output_file = "comparison_result.xlsx"

    try:
        with open(ru_file, 'r', encoding='utf-8') as f:
            ru_data = json.load(f)
        with open(en_file, 'r', encoding='utf-8') as f:
            en_data = json.load(f)

        # Создаем файл сравнения
        create_comparison_xlsx(ru_data, en_data, output_file)

    except FileNotFoundError as e:
        print(f"Ошибка: Файл не найден - {e.filename}")
    except json.JSONDecodeError as e:
        print(f"Ошибка в формате JSON: {e}")
    except Exception as e:
        print(f"Произошла ошибка: {str(e)}")

if __name__ == "__main__":
    main()
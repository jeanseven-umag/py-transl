import json
import openpyxl
from openpyxl import Workbook
import os

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
            result[new_key] = str(value) if value is not None else ""
    return result

def create_comparison_xlsx(json_files, output_file):
    """
    Создает XLSX-файл с сравнением значений из нескольких JSON-файлов
    """
    # Загружаем все JSON-файлы
    all_data = {}
    for file_path in json_files:
        try:
            with open(file_path, 'r', encoding='utf-8') as f:
                data = json.load(f)
                lang_code = os.path.splitext(os.path.basename(file_path))[0]
                all_data[lang_code] = extract_keys_with_values(data)
        except Exception as e:
            print(f"Ошибка при загрузке файла {file_path}: {str(e)}")
            continue

    if not all_data:
        print("Нет данных для обработки")
        return

    # Создаем новую книгу Excel
    wb = Workbook()
    ws = wb.active
    ws.title = "Multi-Language Comparison"

    # Заголовки столбцов (первый столбец - ключи, остальные - языки)
    headers = ["Key"] + list(all_data.keys())
    ws.append(headers)

    # Получаем все уникальные ключи из всех файлов
    all_keys = set()
    for lang_data in all_data.values():
        all_keys.update(lang_data.keys())
    sorted_keys = sorted(all_keys)

    # Заполняем данные
    for key in sorted_keys:
        row = [key]
        for lang in all_data.keys():
            row.append(all_data[lang].get(key, ""))
        ws.append(row)

    # Настраиваем ширину столбцов
    for col in ws.columns:
        max_length = 0
        column = col[0].column_letter
        for cell in col:
            try:
                cell_value = str(cell.value) if cell.value is not None else ""
                if len(cell_value) > max_length:
                    max_length = len(cell_value)
            except:
                pass
        adjusted_width = (max_length + 2)
        ws.column_dimensions[column].width = adjusted_width

    # Замораживаем первую строку и первый столбец
    ws.freeze_panes = 'B2'

    # Сохраняем файл
    wb.save(output_file)
    print(f"Файл сравнения сохранен как: {output_file}")

def main():
    # Список JSON-файлов для сравнения
    json_files = [
        "ru-RU.json",
        "en-US.json",
        "kk-KZ.json",
        "ky-KG.json",
        "uz-UZ.json"
    ]
    
    output_file = "multi_lang_comparison.xlsx"

    # Проверяем существование файлов
    existing_files = []
    for file_path in json_files:
        if os.path.exists(file_path):
            existing_files.append(file_path)
        else:
            print(f"Файл не найден: {file_path}")

    if len(existing_files) < 2:
        print("Недостаточно файлов для сравнения (минимум 2)")
        return

    # Создаем файл сравнения
    create_comparison_xlsx(existing_files, output_file)

if __name__ == "__main__":
    main()
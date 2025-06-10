import pandas as pd
import re

def convert_title_to_capital_case(text):
    """
    Преобразует текст из Title Case в Capital case:
    "Это Пример Title Case" → "Это пример title case"
    """
    if pd.isna(text) or not isinstance(text, str):
        return text
    
    # Разбиваем на слова, сохраняя пробелы и пунктуацию
    words = re.findall(r"(\w+|\W+)", text)
    
    # Обрабатываем каждое слово
    result = []
    for i, word in enumerate(words):
        if word.strip():  # Если слово содержит буквы
            # Первое слово - с заглавной, остальные - строчные
            if i == 0:
                processed = word.capitalize()
            else:
                processed = word.lower()
            result.append(processed)
        else:
            result.append(word)  # Пробелы и пунктуация без изменений
    
    return ''.join(result)

def process_file(input_file, output_file=None):
    """
    Обрабатывает файл (XLSX или CSV), преобразуя второй столбец
    """
    # Чтение файла
    if input_file.endswith('.xlsx'):
        df = pd.read_excel(input_file)
    elif input_file.endswith('.csv'):
        df = pd.read_csv(input_file)
    else:
        raise ValueError("Поддерживаются только файлы .xlsx и .csv")
    
    if len(df.columns) < 2:
        raise ValueError("Файл должен содержать как минимум 2 столбца")
    
    # Преобразование второго столбца
    col_name = df.columns[1]
    df[col_name] = df[col_name].apply(convert_title_to_capital_case)
    
    # Сохранение результата
    if not output_file:
        if input_file.endswith('.xlsx'):
            output_file = input_file.replace('.xlsx', '_converted.xlsx')
        else:
            output_file = input_file.replace('.csv', '_converted.csv')
    
    if output_file.endswith('.xlsx'):
        df.to_excel(output_file, index=False)
    else:
        df.to_csv(output_file, index=False)
    
    print(f"Файл обработан и сохранен как: {output_file}")

if __name__ == "__main__":
    import sys
    
    if len(sys.argv) < 2:
        print("Использование: python script.py <input_file> [output_file]")
        print("Пример: python script.py translations.xlsx output.xlsx")
        sys.exit(1)
    
    input_file = sys.argv[1]
    output_file = sys.argv[2] if len(sys.argv) > 2 else None
    
    try:
        process_file(input_file, output_file)
    except Exception as e:
        print(f"Ошибка: {str(e)}")
        sys.exit(1)
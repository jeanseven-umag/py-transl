import json
import re

def title_to_capital_case(text):
    if not isinstance(text, str):
        return text
    
    if not text:
        return text
    
    # Разбиваем строку на слова, сохраняя разделители
    words = re.split(r'(\s+)', text)
    
    # Обрабатываем каждое слово
    processed_words = []
    for i, word in enumerate(words):
        if i == 0:
            # Первое слово - первая буква заглавная, остальные строчные
            processed_words.append(word[0].upper() + word[1:].lower() if word else '')
        else:
            # Остальные слова - все буквы строчные
            processed_words.append(word.lower() if word else '')
    
    return ''.join(processed_words)

def process_json_file(input_file, output_file):
    # Чтение JSON-файла
    with open(input_file, 'r', encoding='utf-8') as f:
        data = json.load(f)
    
    # Рекурсивная обработка всех значений
    def process_value(obj):
        if isinstance(obj, dict):
            return {k: process_value(v) for k, v in obj.items()}
        elif isinstance(obj, list):
            return [process_value(item) for item in obj]
        elif isinstance(obj, str):
            return title_to_capital_case(obj)
        else:
            return obj
    
    # Обработка всех данных
    processed_data = process_value(data)
    
    # Запись в новый файл
    with open(output_file, 'w', encoding='utf-8') as f:
        json.dump(processed_data, f, ensure_ascii=False, indent=2)
    
    print(f"Обработка завершена. Результат сохранён в {output_file}")

# Пример использования
if __name__ == "__main__":
    input_json = "en-US.json"  # Ваш исходный файл
    output_json = "en-US-capital.json"  # Файл для сохранения результата
    
    process_json_file(input_json, output_json)
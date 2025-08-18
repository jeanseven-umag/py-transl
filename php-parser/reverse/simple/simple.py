import openpyxl
import re
from pathlib import Path

def translate_php_file(xlsx_path, php_file_path):
    # Load translations from Excel
    wb = openpyxl.load_workbook(xlsx_path)
    sheet = wb.active  # Get first sheet
    
    translations = {}
    for row in sheet.iter_rows(min_row=2, values_only=True):  # skip header
        if len(row) >= 2 and row[0] and row[1]:
            translations[row[0]] = row[1]  # key: translation
    
    # Read PHP file
    with open(php_file_path, 'r', encoding='utf-8') as f:
        php_content = f.read()
    
    # Find and replace translations while preserving order
    def replace_match(match):
        key = match.group(1)
        original_value = match.group(2)
        # Escape single quotes in the translation
        tj_value = translations.get(key, original_value).replace("'", "\\'")
        return f"'{key}' => '{tj_value}'"
    
    # Use regex to find all key-value pairs and replace values
    new_content = re.sub(
        r"'([^']+)' => '([^']*)'",
        replace_match,
        php_content
    )
    
    # Write back to the same file (or create a new one if you prefer)
    with open(php_file_path, 'w', encoding='utf-8') as f:
        f.write(new_content)
    
    print(f"Updated {php_file_path} with Tajik translations")

if __name__ == "__main__":
    # Example usage
    translate_php_file('simple.xlsx', 'product_snt.php')
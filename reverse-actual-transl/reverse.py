import json
import openpyxl
from pathlib import Path

def update_translations_from_xlsx(original_json_path, xlsx_path, output_json_path):
    # Load the original JSON
    with open(original_json_path, 'r', encoding='utf-8') as f:
        original_data = json.load(f)
    
    # Load the Excel file
    wb = openpyxl.load_workbook(xlsx_path)
    sheet = wb.active
    
    # Create a dictionary of translations from Excel
    translations = {}
    for row in sheet.iter_rows(min_row=2, values_only=True):  # Skip header row
        if len(row) >= 2 and row[0] and row[1]:
            translations[row[0]] = row[1]
    
    # Function to update nested dictionary with translations
    def update_dict_with_translations(data, key_path, translations):
        keys = key_path.split('.')
        current = data
        for key in keys[:-1]:
            if key not in current:
                return  # Key path doesn't exist in JSON
            current = current[key]
        final_key = keys[-1]
        if final_key in current and key_path in translations:
            current[final_key] = translations[key_path]
    
    # Create a copy of original data to modify
    output_data = original_data.copy()
    
    # Update all values that have translations
    for key_path, tj_translation in translations.items():
        update_dict_with_translations(output_data, key_path, translations)
    
    # Save the updated JSON
    with open(output_json_path, 'w', encoding='utf-8') as f:
        json.dump(output_data, f, ensure_ascii=False, indent=2, sort_keys=True)
    
    print(f"Successfully created {output_json_path} with Tajik translations")

# Example usage
if __name__ == "__main__":
    original_json = Path('kk-KZ.json')
    xlsx_file = Path('tj.xlsx')
    output_json = Path('tg-TJ.json')
    
    update_translations_from_xlsx(original_json, xlsx_file, output_json)
import json
import openpyxl
from pathlib import Path

def update_json_from_xlsx(xlsx_path, json_path, language_column='KG'):
    # Load the Excel file
    wb = openpyxl.load_workbook(xlsx_path)
    sheet = wb.active
    
    # Create a dictionary of key-value pairs from Excel (key: 1st column, value: specified language column)
    excel_data = {}
    for row in sheet.iter_rows(min_row=2, values_only=True):  # Skip header row
        if len(row) >= 4:  # Ensure there are at least 4 columns
            key = row[0]
            value = row[3] if language_column == 'KG' else row[2] if language_column == 'KZ' else row[1]
            if key and value:  # Only add if both key and value exist
                excel_data[key] = value
    
    # Load the JSON file
    with open(json_path, 'r', encoding='utf-8') as f:
        json_data = json.load(f)
    
    # Function to recursively update JSON values
    def update_nested_json(data, key_path, new_value):
        keys = key_path.split('.')
        current = data
        for key in keys[:-1]:
            if key not in current:
                return  # Key path doesn't exist in JSON
            current = current[key]
        final_key = keys[-1]
        if final_key in current:
            current[final_key] = new_value
    
    # Update JSON values where keys match
    for excel_key, excel_value in excel_data.items():
        update_nested_json(json_data, excel_key, excel_value)
    
    # Save the updated JSON back to file
    with open(json_path, 'w', encoding='utf-8') as f:
        json.dump(json_data, f, ensure_ascii=False, indent=2)

# Example usage
if __name__ == "__main__":
    xlsx_file = Path('./management.xlsx')
    json_file = Path('./ky-KG.json')

    update_json_from_xlsx(xlsx_file, json_file, language_column='KG')
    print(f"Updated {json_file} with values from {xlsx_file}")
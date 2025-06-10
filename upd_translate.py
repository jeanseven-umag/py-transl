import pandas as pd
import json

def update_json_with_excel(excel_path, json_path, output_path=None):
    # Read Excel file
    df = pd.read_excel(excel_path)
    
    # Convert to dictionary (key: translation)
    translations = dict(zip(df['key'], df['ENG']))
    
    # Read JSON file
    with open(json_path, 'r', encoding='utf-8') as f:
        data = json.load(f)
    
    # Function to recursively update JSON with translations
    def update_dict(d):
        for key, value in d.items():
            if isinstance(value, dict):
                update_dict(value)
            else:
                # Check if this key exists in translations
                if key in translations:
                    d[key] = translations[key]
                # Also check for nested keys (like "subscription.check-licence-fee")
                # by replacing dots with underscores (common in JSON keys)
                dotted_key = key.replace('_', '.')
                if dotted_key in translations:
                    d[key] = translations[dotted_key]
    
    # Update the JSON data
    for key, value in translations.items():
        # Handle keys with dots (nested structure)
        if '.' in key:
            parts = key.split('.')
            current = data
            # Traverse the structure
            for part in parts[:-1]:
                if part not in current:
                    break  # skip if path doesn't exist
                current = current[part]
            else:
                # If we successfully traversed all parts
                last_part = parts[-1]
                if last_part in current:
                    current[last_part] = value
        else:
            # Handle top-level keys
            if key in data:
                data[key] = value
    # Also update nested keys that might not be in dotted format
    update_dict(data)
    
    # Save updated JSON
    output_path = output_path or json_path
    with open(output_path, 'w', encoding='utf-8') as f:
        json.dump(data, f, ensure_ascii=False, indent=4)
    
    return data

# Usage
updated_data = update_json_with_excel('Transfers.xlsx', 'ru-RU.json', 'en-EN.json')
print("JSON file has been updated successfully!")
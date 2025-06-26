import pandas as pd
import json
import os
from pathlib import Path

def load_keys_to_remove(excel_file):
    """Load keys from Excel that need to be removed"""
    df = pd.read_excel(excel_file)
    return set(df['Full Path'].tolist())

def clean_json_files(keys_to_remove):
    """Process all JSON files in directory and remove specified keys"""
    for json_file in Path('.').glob('*.json'):
        print(f"Processing {json_file.name}...")
        
        with open(json_file, 'r', encoding='utf-8') as f:
            data = json.load(f)
        
        # Track if we made any changes
        modified = False
        
        # Recursively remove keys
        def remove_keys(obj, path=""):
            nonlocal modified
            if isinstance(obj, dict):
                for key in list(obj.keys()):
                    new_path = f"{path}.{key}" if path else key
                    if new_path in keys_to_remove:
                        del obj[key]
                        modified = True
                        print(f"Removed: {new_path}")
                    elif isinstance(obj[key], (dict, list)):
                        remove_keys(obj[key], new_path)
            elif isinstance(obj, list):
                for item in obj:
                    if isinstance(item, (dict, list)):
                        remove_keys(item, path)
        
        remove_keys(data)
        
        if modified:
            # Save cleaned file
            with open(json_file, 'w', encoding='utf-8') as f:
                json.dump(data, f, ensure_ascii=False, indent=2)
            print(f"Saved cleaned {json_file.name}")
        else:
            print(f"No changes needed for {json_file.name}")

if __name__ == '__main__':
    excel_file = 'output.xlsx'
    
    if not os.path.exists(excel_file):
        print(f"Error: {excel_file} not found!")
        exit(1)
    
    keys_to_remove = load_keys_to_remove(excel_file)
    print(f"Loaded {len(keys_to_remove)} keys to remove")
    
    clean_json_files(keys_to_remove)
    print("Finished processing all JSON files")
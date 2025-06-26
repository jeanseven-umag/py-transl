import re
import pandas as pd
from bs4 import BeautifulSoup

def extract_translation_keys(html_file):
    # Read HTML file
    with open(html_file, 'r', encoding='utf-8') as f:
        content = f.read()
    
    # Find all {{ }} patterns containing MANAGEMENT.
    pattern = r'\{\{\s*[\'\"](MANAGEMENT\.[^\'\"]+)[\'\"]\s*[|].*?\}\}'
    matches = re.findall(pattern, content)
    
    # Process matches into (full_path, last_key) pairs
    results = []
    for full_path in matches:
        last_key = full_path.split('.')[-1]
        results.append((full_path, last_key))
    
    return results

def save_to_excel(data, output_file):
    df = pd.DataFrame(data, columns=['Full Path', 'Last Key'])
    df.to_excel(output_file, index=False)

if __name__ == '__main__':
    input_html = 'some.html'
    output_excel = 'output.xlsx'
    
    extracted_data = extract_translation_keys(input_html)
    save_to_excel(extracted_data, output_excel)
    
    print(f"Found {len(extracted_data)} translation keys. Saved to {output_excel}")

import json
import favicon
import requests
import os

userAgent = "Mozilla/5.0 (compatible; archive.org_bot +http://www.archive.org/details/archive.org_bot)"

headers = {
        "User-Agent": userAgent
}

with open("webLinks.json", "r", encoding="utf-8") as file:
    data = json.load(file)
    
for label, array_data in data.items():
    print(f"label: {label}")
    
    try:
        for entry in array_data["entries"]:
            favicon_name = entry["favicon"]
            url = entry["link"]
            name = entry["name"]

            if(not os.path.isfile(f"../img/links/favicons/{favicon_name}.png")):
                try:
                    icons = favicon.get(url, headers=headers)
                    icon = icons[0]  # Largest available icon
                    
                    print(icon.url, icon.width, icon.height, icon.format)
                    response = requests.get(icon.url, headers=headers, timeout=5)
                    response.raise_for_status()
                    with open(f"../img/links/favicons/{favicon_name}.png", "wb") as file:
                            file.write(response.content)
                except:
                    print(f"Could not fetch {name} favicon!")
                    pass
                

    except Exception as e:
        print(f"An error occurred: {e}")
        # pass

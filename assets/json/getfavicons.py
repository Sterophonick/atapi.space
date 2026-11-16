import json
import favicon
import requests
import os

from urllib.parse import urlsplit

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

            # Only do this if the file doesn't exist already
            if(not os.path.isfile(f"../img/links/favicons/{favicon_name}.png")):
                try:
                    # Google hosts a favicon API that we can use for this type of thing
                    hostname = urlsplit(url).scheme + "://" + urlsplit(url).hostname
                    
                    # we need to ignore any and all links that direct to the Wayback Machine
                    if("web.archive.org" not in hostname):
                        google_request = "https://www.google.com/s2/favicons?domain="+ hostname + "&sz=128"
                            
                        response = requests.get(google_request, headers=headers, timeout=5)
                        response.raise_for_status()
                        with open(f"../img/links/favicons/{favicon_name}.png", "wb") as file:
                                file.write(response.content)
                    else:
                        raise("idk")
                    
                except:
                    
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

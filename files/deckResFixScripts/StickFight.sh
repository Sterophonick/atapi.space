#!/bin/bash

shopt -s expand_aliases

# THIS DOES NOT WORK, FUCK YOU LANDFALL

alias deckScrWidth="xrandr -d :1 | grep ' connected ' | cut -d ' ' -f 3 | cut -d 'x' -f 1"
alias deckScrHeight="xrandr -d :1 | grep ' connected ' | cut -d ' ' -f 3 | cut -d 'x' -f 2 | cut -d '+' -f 1"

echo "forcing resolution to $(deckScrWidth)x$(deckScrHeight)"

sed -i "s/\"Screenmanager Resolution Height_h2627697771\"=dword:.*/\"Screenmanager Resolution Height_h2627697771\"=dword:00000$(printf '%x\n' 1280)/" /home/deck/.steam/steam/steamapps/compatdata/519860/pfx/user.reg

sed -i "s/\"Screenmanager Resolution Width_h182942802\"=dword:.*/\"Screenmanager Resolution Width_h182942802\"=dword:00000$(printf '%x\n' 720)/" /home/deck/.steam/steam/steamapps/compatdata/519860/pfx/user.reg

sed -i "s/\"Resolution_h298171889\"=dword:.*/\"Resolution_h298171889\"=dword:0000001d/" /home/deck/.steam/steam/steamapps/compatdata/674940/pfx/user.reg

# none of the resolutions will ever compute to below or above three hex digits so just force five zeroes

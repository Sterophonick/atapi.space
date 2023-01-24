#!/bin/bash

shopt -s expand_aliases

alias deckScrWidth="xrandr -d :1 | grep ' connected ' | cut -d ' ' -f 3 | cut -d 'x' -f 1"
alias deckScrHeight="xrandr -d :1 | grep ' connected ' | cut -d ' ' -f 3 | cut -d 'x' -f 2 | cut -d '+' -f 1"

echo "forcing resolution to $(deckScrWidth)x$(deckScrHeight)"

sed -i "s/xres = .*/xres = $(deckScrWidth)/" /home/deck/.steam/steam/steamapps/common/Dusk/config/dusk.ini
sed -i "s/yres = .*/yres = $(deckScrHeight)/" /home/deck/.steam/steam/steamapps/common/Dusk/config/dusk.ini

sed -i "s/\"Screenmanager Resolution Height_h2627697771\"=dword:.*/\"Screenmanager Resolution Height_h2627697771\"=dword:00000$(printf '%x\n' $(deckScrHeight))/" /home/deck/.steam/steam/steamapps/compatdata/519860/pfx/user.reg

sed -i "s/\"Screenmanager Resolution Width_h182942802\"=dword:.*/\"Screenmanager Resolution Width_h182942802\"=dword:00000$(printf '%x\n' $(deckScrWidth))/" /home/deck/.steam/steam/steamapps/compatdata/519860/pfx/user.reg

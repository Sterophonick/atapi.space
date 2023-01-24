#!/bin/bash

shopt -s expand_aliases

alias deckScrWidth="xrandr -d :1 | grep ' connected ' | cut -d ' ' -f 3 | cut -d 'x' -f 1"
alias deckScrHeight="xrandr -d :1 | grep ' connected ' | cut -d ' ' -f 3 | cut -d 'x' -f 2 | cut -d '+' -f 1"

echo "forcing resolution to $(deckScrWidth)x$(deckScrHeight)"

sed -i "s/ResX=.*/ResX=$(deckScrWidth)/" /home/deck/.steam/steam/Steam/steamapps/compatdata/17410/pfx/drive_c/users/steamuser/Documents/EA\ Games/Mirror\'s\ Edge/TdGame/Config/TdEngine.ini
sed -i "s/ResY=.*/ResY=$(deckScrHeight)/" /home/deck/.steam/steam/Steam/steamapps/compatdata/17410/pfx/drive_c/users/steamuser/Documents/EA\ Games/Mirror\'s\ Edge/TdGame/Config/TdEngine.ini

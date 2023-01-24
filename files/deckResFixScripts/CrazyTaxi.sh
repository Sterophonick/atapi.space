#!/bin/bash

shopt -s expand_aliases

alias deckScrWidth="xrandr -d :1 | grep ' connected ' | cut -d ' ' -f 3 | cut -d 'x' -f 1"
alias deckScrHeight="xrandr -d :1 | grep ' connected ' | cut -d ' ' -f 3 | cut -d 'x' -f 2 | cut -d '+' -f 1"

echo "forcing resolution to $(deckScrWidth)x$(deckScrHeight)"

sed -i "s/width=\".*\" height=\".*\"/width=\"$(deckScrWidth)\" height=\"$(deckScrHeight)\"/" /home/deck/.steam/steam/steamapps/common/Crazy\ Taxi/system_config.xml

# This totally mangles the config but it still works for some odd reason

#!/bin/bash

shopt -s expand_aliases

alias deckScrWidth="xrandr -d :1 | grep ' connected ' | cut -d ' ' -f 3 | cut -d 'x' -f 1"
alias deckScrHeight="xrandr -d :1 | grep ' connected ' | cut -d ' ' -f 3 | cut -d 'x' -f 2 | cut -d '+' -f 1"

echo "forcing resolution to $(deckScrWidth)x$(deckScrHeight)"

sed -i "s/width = .*/width = $(deckScrWidth)/" /home/deck/.local/share/Steam/userdata/847644823/204360/local/settings.ini
sed -i "s/height = .*/height = $(deckScrHeight)/" /home/deck/.local/share/Steam/userdata/847644823/204360/local/settings.ini

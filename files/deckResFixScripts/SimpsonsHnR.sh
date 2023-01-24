#!/bin/bash

shopt -s expand_aliases

alias deckScrWidth="xrandr -d :1 | grep ' connected ' | cut -d ' ' -f 3 | cut -d 'x' -f 1"
alias deckScrHeight="xrandr -d :1 | grep ' connected ' | cut -d ' ' -f 3 | cut -d 'x' -f 2 | cut -d '+' -f 1"

echo "forcing resolution to $(deckScrWidth)x$(deckScrHeight)"

sed -i "s/resolution=.*/resolution=$(deckScrWidth)x$(deckScrHeight)/" /run/media/deck/SteamDeckSD/NonSteam/Microsoft\ Windows/The\ Simpsons\ -\ Hit\ and\ Run/Game/simpsons.ini

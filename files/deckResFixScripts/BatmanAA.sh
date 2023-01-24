#!/bin/bash

shopt -s expand_aliases

alias deckScrWidth="xrandr -d :1 | grep ' connected ' | cut -d ' ' -f 3 | cut -d 'x' -f 1"
alias deckScrHeight="xrandr -d :1 | grep ' connected ' | cut -d ' ' -f 3 | cut -d 'x' -f 2 | cut -d '+' -f 1"

echo "forcing resolution to $(deckScrWidth)x$(deckScrHeight)"

sed -i "s/ResX=.*/ResX=$(deckScrWidth)/" /run/media/deck/SteamDeckSD/steamapps/common/Batman\ Arkham\ Asylum\ GOTY/Engine/Config/BaseEngine.ini
sed -i "s/ResY=.*/ResY=$(deckScrHeight)/" /run/media/deck/SteamDeckSD/steamapps/common/Batman\ Arkham\ Asylum\ GOTY/Engine/Config/BaseEngine.ini

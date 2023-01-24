#!/bin/bash

shopt -s expand_aliases

alias deckScrWidth="xrandr -d :1 | grep ' connected ' | cut -d ' ' -f 3 | cut -d 'x' -f 1"
alias deckScrHeight="xrandr -d :1 | grep ' connected ' | cut -d ' ' -f 3 | cut -d 'x' -f 2 | cut -d '+' -f 1"

echo "forcing resolution to $(deckScrWidth)x$(deckScrHeight)"

sed -i "s/FullscreenWidth = .*/FullscreenWidth = $(deckScrWidth)/" /home/deck/.steam/steam/steamapps/compatdata/411960/pfx/drive_c/users/steamuser/Documents/TY\ the\ Tasmanian\ Tiger/settings.ini
sed -i "s/FullscreenHeight = .*/FullscreenHeight = $(deckScrHeight)/" /home/deck/.steam/steam/steamapps/compatdata/411960/pfx/drive_c/users/steamuser/Documents/TY\ the\ Tasmanian\ Tiger/settings.ini
sed -i "s/WindowWidth = .*/WindowWidth = $(deckScrWidth)/" /home/deck/.steam/steam/steamapps/compatdata/411960/pfx/drive_c/users/steamuser/Documents/TY\ the\ Tasmanian\ Tiger/settings.ini
sed -i "s/WindowHeight = .*/WindowHeight = $(deckScrHeight)/" /home/deck/.steam/steam/steamapps/compatdata/411960/pfx/drive_c/users/steamuser/Documents/TY\ the\ Tasmanian\ Tiger/settings.ini

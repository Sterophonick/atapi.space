#!/bin/bash

shopt -s expand_aliases

alias deckScrWidth="xrandr -d :1 | grep ' connected ' | cut -d ' ' -f 3 | cut -d 'x' -f 1"
alias deckScrHeight="xrandr -d :1 | grep ' connected ' | cut -d ' ' -f 3 | cut -d 'x' -f 2 | cut -d '+' -f 1"

echo "forcing resolution to $(deckScrWidth)x$(deckScrHeight)"

sed -i "s/\"ScreenWidth\" \".*\"/\"ScreenWidth\" \"$(deckScrWidth)\"/" /home/deck/.local/share/Steam/steamapps/compatdata/21090/pfx/drive_c/users/Public/Documents/Monolith\ Productions/FEAR/settings.cfg

sed -i "s/\"ScreenHeight\" \".*\"/\"ScreenHeight\" \"$(deckScrHeight)\"/" /home/deck/.local/share/Steam/steamapps/compatdata/21090/pfx/drive_c/users/Public/Documents/Monolith\ Productions/FEAR/settings.cfg


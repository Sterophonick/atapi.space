#!/bin/bash

shopt -s expand_aliases

alias deckScrWidth="xrandr -d :1 | grep ' connected ' | cut -d ' ' -f 3 | cut -d 'x' -f 1"
alias deckScrHeight="xrandr -d :1 | grep ' connected ' | cut -d ' ' -f 3 | cut -d 'x' -f 2 | cut -d '+' -f 1"

echo "forcing resolution to $(deckScrWidth)x$(deckScrHeight)"

sed -i "s/-screenResWidth .* -screenResHeight .*/-screenResWidth $(deckScrWidth) -screenResHeight $(deckScrHeight)/" /home/deck/.local/share/Steam/userdata/847644823/238460/remote/BattleBlockTheaterConfig

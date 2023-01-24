#!/bin/bash

shopt -s expand_aliases

alias deckScrWidth="xrandr -d :1 | grep ' connected ' | cut -d ' ' -f 3 | cut -d 'x' -f 1"
alias deckScrHeight="xrandr -d :1 | grep ' connected ' | cut -d ' ' -f 3 | cut -d 'x' -f 2 | cut -d '+' -f 1"

echo "forcing resolution to $(deckScrWidth)x$(deckScrHeight)"

if [-f /home/deck/.local/share/Steam/steamapps/compatdata/32440/pfx/drive_c/users/steamuser/AppData/Local/LucasArts/LEGO\ Star\ Wars\ -\ The\ Complete\ Saga/pcconfig.txt ]; then
    sed -i "s/ScreenWidth            .*/ScreenWidth            $(deckScrWidth)/" /home/deck/.local/share/Steam/steamapps/compatdata/32440/pfx/drive_c/users/steamuser/AppData/Local/LucasArts/LEGO\ Star\ Wars\ -\ The\ Complete\ Saga/pcconfig.txt
    sed -i "s/ScreenHeight           .*/ScreenHeight           $(deckScrHeight)/" /home/deck/.local/share/Steam/steamapps/compatdata/32440/pfx/drive_c/users/steamuser/AppData/Local/LucasArts/LEGO\ Star\ Wars\ -\ The\ Complete\ Saga/pcconfig.txt
    sed -i "s/WindowWidth            .*/WindowWidth            $(deckScrWidth)/" /home/deck/.local/share/Steam/steamapps/compatdata/32440/pfx/drive_c/users/steamuser/AppData/Local/LucasArts/LEGO\ Star\ Wars\ -\ The\  Complete\ Saga/pcconfig.txt
    sed -i "s/WindowHeight           .*/WindowHeight           $(deckScrHeight)/" /home/deck/.local/share/Steam/steamapps/compatdata/32440/pfx/drive_c/users/steamuser/AppData/Local/LucasArts/LEGO\ Star\ Wars\ -\ The\ Complete\ Saga/pcconfig.txt
fi

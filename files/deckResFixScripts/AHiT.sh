#!/bin/bash

shopt -s expand_aliases

alias deckScrWidth="xrandr -d :1 | grep ' connected ' | cut -d ' ' -f 3 | cut -d 'x' -f 1"
alias deckScrHeight="xrandr -d :1 | grep ' connected ' | cut -d ' ' -f 3 | cut -d 'x' -f 2 | cut -d '+' -f 1"

echo "forcing resolution to $(deckScrWidth)x$(deckScrHeight)"

sed -i "s/ResX=.*/ResX=$(deckScrWidth)/" /home/deck/.steam/steam/steamapps/common/HatinTime/HatinTimeGame/Config/HatinTimeSystemSettings.ini
sed -i "s/ResY=.*/ResY=$(deckScrHeight)/" /home/deck/.steam/steam/steamapps/common/HatinTime/HatinTimeGame/Config/HatinTimeSystemSettings.ini

sed -i "s/SecondaryDisplayMaximumWidth=.*/SecondaryDisplayMaximumWidth=$(deckScrWidth)/" /run/media/deck/SteamDeckSD/steamapps/common/HatinTime/HatinTimeGame/Config/HatinTimeSystemSettings.ini
sed -i "s/SecondaryDisplayMaximumHeight=.*/SecondaryDisplayMaximumHeight=$(deckScrHeight)/" /run/media/deck/SteamDeckSD/steamapps/common/HatinTime/HatinTimeGame/Config/HatinTimeSystemSettings.ini

sed -i "s/ResX=.*/ResX=$(deckScrWidth)/" /run/media/deck/SteamDeckSD/steamapps/common/HatinTime/Engine/Config/BaseSystemSettings.ini
sed -i "s/ResY=.*/ResY=$(deckScrHeight)/" /run/media/deck/SteamDeckSD/steamapps/common/HatinTime/Engine/Config/BaseSystemSettings.ini

sed -i "s/ResX=.*/ResX=$(deckScrWidth)/" /run/media/deck/SteamDeckSD/steamapps/common/HatinTime/HatinTimeGame/Config/DefaultSystemSettings.ini
sed -i "s/ResY=.*/ResY=$(deckScrHeight)/" /run/media/deck/SteamDeckSD/steamapps/common/HatinTime/HatinTimeGame/Config/DefaultSystemSettings.ini

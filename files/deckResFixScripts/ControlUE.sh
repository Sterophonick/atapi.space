#!/bin/bash

# Control Ultimate Edition
# Also sets an 85% resolution scale for the current res to get better performance
# Control is based and can accept wh

shopt -s expand_aliases

alias deckScrWidth="xrandr -d :1 | grep ' connected ' | cut -d ' ' -f 3 | cut -d 'x' -f 1"
alias deckScrHeight="xrandr -d :1 | grep ' connected ' | cut -d ' ' -f 3 | cut -d 'x' -f 2 | cut -d '+' -f 1"

echo "forcing resolution to $(deckScrWidth)x$(deckScrHeight)"

# Set standard resolution
sed -i "s/\"m_iOutputResolutionY\": .*/\"m_iOutputResolutionY\": $(deckScrHeight),/" /run/media/deck/SteamDeckSD/steamapps/common/Control/renderer.ini
sed -i "s/ \"m_iOutputResolutionX\": .*/ \"m_iOutputResolutionX\": $(deckScrWidth),/" /run/media/deck/SteamDeckSD/steamapps/common/Control/renderer.ini

# Set render resolution
SCALE = 0.85
FINAL_RENDER_WIDTH = $(python -c "print(round($(deckScrWidth) * $(SCALE))") # calculate render width & round
FINAL_RENDER_HEIGHT = $(python -c "print(round(($(deckScrWidth) / $(deckScrHeight)) * $FINAL_RENDER_WIDTH))")

sed -i "s/\"m_iRenderResolutionY\": .*/\"m_iRenderResolutionY\": $FINAL_RENDER_HEIGHT,/" /run/media/deck/SteamDeckSD/steamapps/common/Control/renderer.ini
sed -i "s/ \"m_iRenderResolutionX\": .*/ \"m_iRenderResolutionX\": $FINAL_RENDER_WIDTH,/" /run/media/deck/SteamDeckSD/steamapps/common/Control/renderer.ini

#jesus christ

#!/bin/zsh

### SteamInputControllerFix
### Author: Sterophonick
### Purpose: Fix the various issue's i've had with controllers and Steam Input under Linux, by chmod 000'ing the -joystick and -event-joystick files
### Steam Input is required to be enabled for all controllers for this script to work correctly. SDL_JOYSTICK_HIDAPI=0 is also recommended.
### It's a very rough script, but I hope you get the idea of what I'm trying to achieve here.

#args:
#1: wait for open file handle? (only for xbox)
#2: name
#3: flags
#4+: device files
chmod_device() {
    pushd /dev/input/by-id
    echo $2
    VARIABLES=${@:4}
    if [ -n "$VARIABLES" ];
    then
        echo $VARIABLES
        chmod $3 ${@:4} # takes two or more because of -joystick and -event-joystick
    fi
    popd
}

while true
do
    #sleep so the user can react to stuff
    sleep .25

    # Fetch PID(s) of Steam, script only uses first PID
    PIDSTEAM="$(pidof steam)"

    #DEBUG: Steam PID
    echo Steam PID: $PIDSTEAM

    # If PID exists
    if [ ! -z $PIDSTEAM ];
    then
        # Fetch uptime of Steam in seconds, using $PIDSTEAM and ps
        UPTIME=$(echo $(ps -p $(echo $PIDSTEAM | head -n1 | awk '{print $1;}') -o etimes) | head -n2 | awk '{print $2;}')

        # DEBUG: Steam UPtime
        echo Steam Uptime: $UPTIME

        # If Steam has been running for at least 15 seconds
        if [ ! -z $UPTIME ] && [ $UPTIME -gt 15 ];
        then
            # Fetch output of ls /dev/input/by-id
            LSOUTPUT="$(ls /dev/input/by-id)"

            #HID based Controllers

            #DualShock/DualSense
            chmod_device 0 'DualShock' 000 $(echo $LSOUTPUT | grep 'usb-Sony')

            #Nintendo Controller
            chmod_device 0 'Nintendo' 000 $(echo $LSOUTPUT | grep 'usb-Nintendo')

            #SDL Based Controllers

            #PDP Afterglow Xbox One Controller
            LSOFOUTPUT=$(lsof -t /dev/input/by-id/usb-Performance*event-joystick)
            echo $LSOFOUTPUT
            if [ ! -z $LSOFOUTPUT ];
            then
                echo fixing PDP
                chmod_device 1 'PDP Controller' 000 $(echo $LSOUTPUT | grep 'usb-Performance')
            fi

            #Microsoft Controller
            LSOFOUTPUT=$(lsof -t /dev/input/by-id/usb-Microsoft*event-joystick)
            echo $LSOFOUTPUT
            if [ ! -z $LSOFOUTPUT ];
            then
                echo fixing MS
                chmod_device 1 'Microsoft' 000 $(echo $LSOUTPUT | grep 'usb-Microsoft')
            fi

            #Google Controller
            LSOFOUTPUT=$(lsof -t /dev/input/by-id/usb-Google*event-joystick)
            echo $LSOFOUTPUT
            if [ ! -z $LSOFOUTPUT ];
            then
                echo fixing google
                chmod_device 0 'Google' 000 $(echo $LSOUTPUT | grep 'usb-Google')
            fi
        fi
    fi
done

#usb-Performance_Designed_Products_Afterglow_Wired_Controller_for_Xbox_One_0000DF4F23392B16-event-joystick

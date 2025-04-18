<?php

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Homepage! :: Blog :: Emulating the Gigatron TTL in MAME");

?>

<h1><img style="vertical-align:middle" src="/assets/img/blog/icon.png"> Emulating the Gigatron TTL in MAME
</h1>
<p style="margin-top: -25px;">It's like the Sinclair ZX81 but gooder-er.<br/></p><br/>
<p>August 6, 2020<br/>Category: Project</p>
<br />
<h2>The Concept</h2>
<p>Basically, I made this driver because I wanted to learn how one of my favorite emulators worked. Plus,
MAME hasn't really had a machine like this before, so I figured I'd give it a shot. It was also a good
programming exercise for me.
The Gigatron is a relatively simple machine, every hardware aspect is controlled by the "CPU", the
screen,
sound, blinkenlights, everything.</p>
<p>The Gigatron has no CPU, it's all 7400-series TTL logic chips, but those specific chips allow for an
instruction set with 256 unique instructions, with a few registers that are able to control
the video signal, the sound, and blinkenlights. In fact, the most difficult thing about it would be
learning MAME's framework.</p>
<img style="width:720px" src="/assets/img/blog/gigatron/Diagram-768x576.png">
<p>This block diagram shows how everything in the machine is connected together.</p>
<br />
<h2>Phil Thomas' Emulator</h2>
<p>Turns out, there was already a JS-based emulator on the official website, made by Phil Thomas. That
emulator uses a BSD-2-clause license, which is compatible with MAME's BSD-3-clause license, so it
wouldn't be of much concern if I ported that emulator to MAME.</p>
<br />
<h2>CPU</h2>
<img style="width:720px"
src="/assets/img/blog/gigatron/Native-instruction-overview-2019-11-25-768x613.png"><br />
<p>This diagram can show just how simple the Gigatron CPU is. There are so few instructions, and each
instruction takes 1 cycle, out of 6.25 MHz.
Of course, not all of that is for program code. A good few hundred thousand cycles or
so is used to draw the frame to the screen, some are used to
control the blinkenlights, and some are used for audio.</p> <br />
<h2>Audio</h2>
<img src="/assets/img/blog/gigatron/gigatron-d.png"><br />
<p>Audio on the Gigatron is incredibly simple. It uses a 4-bit R-2R DAC, using a few resistors to do the
digital to analog conversion.
The biggest challenge of it was figuring out the way I can attach and control a DAC in MAME. Thankfully,
it's not too difficult to do that!
I just had to use this bit of code in the machine configuration:</p>
<img src="/assets/img/blog/gigatron/gigatron-1.png"><br />
<p>The first line attaches a speaker, with audio playing at equal volumes in both the left and right ears.
The second line attaches a 4-Bit R-2R DAC, and routes it to the speaker.
Lines 3-5 simply attach a voltage regulator and route that to the DAC, though I still have yet to figure
out what the point of the voltage regulator is.</p>
<p>Here's the code that is responsible for controlling the DAC:</p>
<img src="/assets/img/blog/gigatron/gigatron-2.png"><br />
<p>And port_outx() is tied to the outx register of the CPU through this simple line in the machine
configuration:</P>
<img src="/assets/img/blog/gigatron/gigatron-3.png"><br />
<p>As you can see, the upper 4 bits of register outx are responsible for controlling what sound sample is
currently playing.
The lower 4 bits are for controlling the LEDs on the machine.</p>
<img src="/assets/img/blog/gigatron/gigatron-e.png"><br />
<p>These blinkenlights are controlled through software, not hardware. If you were to use TinyBASIC (you
cannot yet in MAME), you would be able to control these lights.</p>
<br />
<h2>Video</h2>
<img src="/assets/img/blog/gigatron/gigatron-4.png"><br />
<p>The Gigatron is capable of displaying 6-bit color on the VGA screen, with a maximum of 64 colors.
As you can see in the above image, register out is responsible for generating the video signal.</p>
<p>We can attach a screen to the machine using these few lines in the machine configuration:</p>
<img src="/assets/img/blog/gigatron/gigatron-5.png"><br />
<p>These set the screen size to 640x480 with a refresh rate of 59.98Hz. It also points at what the emulator
should to to update the screen.</p>
<img src="/assets/img/blog/gigatron/gigatron-6.png"><br />
<p>This is the code that is responsible for taking the value of register "out", and drawing pixels with it.
It detects all the standard VBlank and HBlank stuff,
you know, resetting the position of the beam, stuff like that. Towards the bottom, you can see where it
draws the pixels. It grabs the necessary color values out of the R, G, and B bits of the OUT
register and converts them to a single 24-bit value that can be displayed on any modern display. Simple.
</p>
<p>We let the machine know how to use port_out by using this simple line in the configuration:</p>
<img src="/assets/img/blog/gigatron/gigatron-7.png"><br />
<br />
<h2>Input</h2>
<img src="/assets/img/blog/gigatron/gigatron-8.png"><br />
<p>The Gigatron handles input through a DB-9 joystick port, used in several older consoles and home
computers such as the Sega Genesis, Commodore Amiga, and Atari 2600.
The machine ships with a Nintendo Famicom-like controller, so we just need to emulate the buttons on the
controller. This code can do that:</p>
<img src="/assets/img/blog/gigatron/gigatron-9.png"><br />
<p>But there's more that we have to do to attach the keypad. So, we add this line to our machine
configuration:</p>
<img src="/assets/img/blog/gigatron/gigatron-a.png"><br />
<p>This will attach the value that the keypad reads to the register called inReg. This is what allows the
CPU to read the joystick state.</p>
<br />
<h2>Memory</h2>
<p>Attaching memory maps was easy. I had to define them like this:</p>
<img src="/assets/img/blog/gigatron/gigatron-b.png"><br />
<p>And then let the CPU know which is ROM and which is RAM.</p>
<img src="/assets/img/blog/gigatron/gigatron-c.png"><br />
<br />
<h2>Conclusion</h2>
<p>So that's a relatively basic explanation of how I ported Gigatron.js to MAME!</p>
<p>Not everything has to be cutting-edge to be fun! <img src="/assets/img/smileys/wink.png"></p>
<br />
<h2>Greetz</h2>
<p>TheMogMiner, Osso13 and ajrhacker for some programming help</p>
<p>Phil Thomas for his JS-Based emulator</p>
<p>Marcel van Kervinck (RIP) / Walter Belgers for creating such a fun little machine</p>
<br />
<a href="https://gigatron.io/">Gigatron website</a><br />
<a href="https://github.com/PhilThomas/gigatron/">Phil's emulator</a><br />
<a href="https://github.com/mamedev/mame/blob/master/src/mame/homebrew/gigatron.cpp">My Gigatron
driver</a><br />
<a href="https://github.com/mamedev/mame/blob/master/src/devices/cpu/gigatron/gigatron.cpp">My Gigatron CPU
code</a><br />

<?php

echo constructPageFooter();

?>

<?php

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Homepage! :: Projects :: Emulation");

?>

<h1><img style="vertical-align:middle" src="\assets\img\projects\icon.png"> Emulation</h1>
<p>I think I know how to make retro computers go brrr, at least for the most part.</p>
<h2>Navigation</h2>
<div id="toc" class="toc" style="width:50%; margin:auto; text-align: left;">
<ul>
<li>
<a href="#GigatronMAME">Gigatron MAME Driver</a>
</li>
<li>
<a href="#Chip8Adv">Chip8Adv</a>
</li>
<li>
<a href="#AdvCadia">AdvCadia</a>
</li>
</ul>
</div>

<h2 id="GigatronMAME">Gigatron MAME Driver</h2>
<p>
A port of Phil Thomas' Gigatron.js emulator to the MAME framework.<br />
There is a blog post about it <a href="/site/blog/gigatron">here.</a>
</p>
<img style="width:320px" src="/assets/img/projects/emu/gigatron/gigatron1.png">
<img style="width:320px" src="/assets/img/projects/emu/gigatron/gigatron2.png">
<img style="width:320px" src="/assets/img/projects/emu/gigatron/gigatron3.png">
<img style="width:320px" src="/assets/img/projects/emu/gigatron/gigatron4.png">
<img style="width:320px" src="/assets/img/projects/emu/gigatron/gigatron5.png"><br />
<a href="https://gigatron.io/">Gigatron website</a><br />
<a href="https://github.com/PhilThomas/gigatron/">Phil's emulator</a><br />
<a href="https://github.com/mamedev/mame/blob/master/src/mame/homebrew/gigatron.cpp">My Gigatron
driver</a><br />
<a href="https://github.com/mamedev/mame/blob/master/src/devices/cpu/gigatron/gigatron.cpp">My
Gigatron CPU code</a><br />
<br />

<h2 id="Chip8Adv">Chip8Adv</h2>
<p>
A very simple reimplementation of the CHIP-8 virtual machine for the Game Boy Advance.</br>
Created by RCA in 1977, CHIP-8 was made for the express purpose of easily making programs for
the <a href="https://en.wikipedia.org/wiki/COSMAC_VIP">RCA COSMAC VIP</a> and <a
href="https://en.wikipedia.org/wiki/Telmac_1800">Telmac 1800</a> microcomputers.<br />
This reimplementation was written with some assistance from <a
href="http://devernay.free.fr/hacks/chip8/C8TECH10.HTM">CowGod's documentation</a> and <a
href="https://github.com/dmatlack/chip8">dmatlack's implementation</a> for Linux using
OpenGL.</br>
It runs all standard CHIP-8 games just fine, but a lot of the more commonly found ones are using
certain SuperChip instructions. No SuperChip instructions work.<br />
This emulator was written as a PogoShell plugin, and is included as part of the <a
href="#Simple">Simple</a> kernel for the EZ-Flash Omega and EZ-Flash Omega: Definitive
Edition.<br />
</p>
<img src="/assets/img/projects/emu/chip8adv/chip8adv1.gif"><br />
<a href="/files/Chip8Adv (Working source).7z">Source code (As of Jan 15, 2019)</a><br />
<br />

<h2 id="AdvCadia">AdvCadia</h2>
<p>
An <a href="https://en.wikipedia.org/wiki/Arcadia_2001">Emerson Arcadia 2001</a> emulator for
the Game Boy Advance.<br />
Like <a href="#Chip8Adv">Chip8Adv</a>, this was also created as a PogoShell plugin, included
with the <a href="#Simple">Simple</a> kernel.<br />
It was derived from the <a href="https://amigan.1emu.net/releases/">Super Bug Advance</a>
emulator created by Amigan Software, porting it from HAMlib to HeartLib.<br />
Compatibility is about the same as SuperBugAdvance, however I doubled the playfield size, and
scaled the screen accordingly.<br />
Not many games, if any, are considered playable, and the sound is very broken.<br />
Just use MAME. :P<br />
</p>
<img src="/assets/img/projects/emu/advcadia/advcadia-2.png">
<img src="/assets/img/projects/emu/advcadia/advcadia-3.png">
<img src="/assets/img/projects/emu/advcadia/advcadia-4.png">
<img src="/assets/img/projects/emu/advcadia/advcadia-5.png">
<img src="/assets/img/projects/emu/advcadia/advcadia-6.png">
<img src="/assets/img/projects/emu/advcadia/advcadia-7.png"><br />
<a href="https://github.com/Sterophonick/AdvCadia">Source code</a>
<br/>

<?php

echo constructPageFooter();

?>

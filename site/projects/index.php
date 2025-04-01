<?php

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Homepage! :: Projects");

?>

<h1><img style="vertical-align:middle" src="\assets\img\projects\icon.png"> Projects</h1>
<p>I do stuff I guess. Here's just where you can find them. Plus, there's an archive of old stuff I have
made!</p>
<br />
<p>
<img class="pixelArt" style="vertical-align:middle" src="\assets\img\global\new.gif">
Complete page overhaul!<br />
</p>

<table class="fixed" align="center" border="0" cellspacing="10" cellpadding="0"
style="font-size:16pt; text-align: center;">

<tr>
    <td><a href="atlantis/"><img width="180px" style="vertical-align:middle" src="\assets\img\projects\landing\atlantis.png"><br/>Game Boy Advance</a></td>
    <td><a href="scratch/"><img width="180px" style="vertical-align:middle" src="\assets\img\projects\landing\scratch.png"><br/>Scratch</a></td>
    <td><a href="penguin/"><img width="180px" style="vertical-align:middle" src="\assets\img\projects\landing\penguin.png"><br/>GNU/Linux</a></td>
    <td><a href="emu/"><img width="180px" style="vertical-align:middle" src="\assets\img\projects\landing\emu.png"><br/>Emulation</a></td>
</tr>
</table>

<table class="fixed" align="center" border="0" cellspacing="10" cellpadding="0"
style="font-size:16pt; text-align: center;">
<tr>
    <td><a href="win32/"><img width="180px" style="vertical-align:middle" src="\assets\img\projects\landing\win32.png"><br/>Windows</a></td>
    <td><a href="misc/"><img width="180px" style="vertical-align:middle" src="\assets\img\projects\landing\misc.png"><br/>Miscellaneous</a></td>
    <td><a href="unfinished/"><img width="180px" style="vertical-align:middle" src="\assets\img\projects\landing\unfinished.png"><br/>Unfinished</a></td>
</tr>
</table>
<br/>
<small>Xenia artwork by CathodeGayTube! <3<br/>Emulation pic comes from Thomas Jentzsch's commented Pitfall disassembly</small>

<?php

echo constructPageFooter();

?>

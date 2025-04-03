<?php

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Homepage! :: Projects :: GNU/Linux");

?>

<h1><img style="vertical-align:middle" src="\assets\img\projects\icon.png"> GNU/Linux</h1>
I swear I'm not a snob, I just don't like using Windows.<br/>
<h2>Navigation</h2>
<div id="toc" class="toc" style="width:50%; margin:auto; text-align: left;">
<ul>
    <li>
        <a href="#LinuxGamingNotes">Linux Gaming Notes</a>
    </li>
    <li>
        <a href="#OneShotLinux">OneShot Linux Fixes</a>
    </li>
    <li>
        <a href="#AURPackages">Arch Linux User Repository Packages</a>
    </li>
    <li>
        <a href="#bazzite">Bazzite</a>
    </li>
</ul>
</div>

<br/>

<h3 id="LinuxGamingNotes">Linux Gaming Notes</h3>
<p>An outdated collection of notes about Linux Gaming, still a decent resource for game-to-game compatibility and other observations.</p>
<a href="linuxnotes">Link</a>
<br />
<br/>
<h3 id="OneShotLinux">OneShot Linux Fixes</h3>
<p>A package containing fixes for OneShot on Linux and Steam Deck</p>
<img src="/assets/img/projects/misc/oneshot_linux.png" width="720px"
title="on little cat feet!"><br />
<a href="oneshot-linux">Link</a>
<br />
<br/>
<h3 id="AURPackages">Arch Linux User Repository Packages</h3>
<p>
I maintain a handful of AUR packages, mostly for old legacy software nobody cares about, but
there are some useful tools there.<br />
<a href="https://aur.archlinux.org/packages?SeB=m&K=Sterophonick">My AUR packages</a>
</p>
<br/>
<h2 id="bazzite">Bazzite</h2>
<p>I make some small contributions to the Bazzite project here and there. Thus far, it's mostly been related to Steam Deck OLED hardware support, as well as backporting upstream Mesa patches for game compatibility, such as for <i>Indiana Jones and the Great Circle</i> on RADV.</p>
<a href="https://bazzite.gg">Project Website.</a>

<?php

echo constructPageFooter();

?>

<?php

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Homepage! :: Projects :: GNU/Linux :: OneShot Complete Fix for Linux & Steam Deck");

?>

<h1>OneShot Complete Fix for Linux & Steam Deck</h1>
<img src="/assets/img/projects/misc/oneshot_linux.png" width="720px" title="on little cat feet!"><br />
<p>An all-in-one fix for OneShot to be playable on Linux and Steam Deck!</p>
<h1>THIS FILE IS RENDERED OBSOLETE BY <a
href="https://store.steampowered.com/app/2915460/OneShot_World_Machine_Edition/">WORLD MACHINE
EDITION</a></h1>
(mostly)<br />
<br />
<p>This package fixes:<br />
- Startup crashes due to libstdc++<br />
- Startup crashes due to Mesa<br />
- Consistent hang towards the end that inhibits all progress<br />
- Broken ending sequence tools<br />
</p>
<br />
<p>Notes:<br />
- If you're on KDE Plasma or Steam Deck, make sure that user applications cannot disable
compositing.<br />
- I have not tested this on Wayland. Play this way at your own risk.<br />
- Steam Deck users, you need to run this through the <a
href="https://github.com/Scrumplex/Steam-Play-None">Steam-Play-None</a> compatibility tool, as Steam
Linux Runtime messes with this game a bit. This will be auto-installed when the setup script is run,
just change your Steam Play compatibility settings in OneShot's properties.<br />
- Steam Deck users, do not play this in Game Mode. This game is ideally played in Desktop mode.
Configure your controllers accordingly.<br />
- This package DOES NOT distribute assets that are not publicly available. You need to buy the Steam
release of OneShot to use this package.<br />
- DO NOT USE PROTON!<br />
<br />
<p>Credits:<br />
- Main executable built with <a
href="https://github.com/thehatkid/ModShot-mkxp-z">ModShot-mkxp</a>.<br />
- Journal built with the original <a
href="https://github.com/elizagamedev/mkxp-oneshot">mkxp-oneshot</a> repository.<br />
- This package contains a build of <a href="https://github.com/ruby/ruby">Ruby 3.0.5</a>.<br />
</p>
<br />
<p>Bug(s):<br />
- The film puzzle is immediately solved for you :/<br />
- Minor text clipping in the credits<br />
</p>
<br />
<p>Installation:<br />
- Extract the contents of the .7z to your game folder.<br />
- Execute the setup.sh script.<br />
- You're done!<br />
</p>
<p><a href="https://archive.org/details/one-shot-linux-rev-b.-7z">Package Download</a><br />

<?php

echo constructPageFooter();

?>

<?php

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Homepage! :: Projects :: Windows");

?>

<h1><img style="vertical-align:middle" src="\assets\img\projects\icon.png"> Windows</h1>
<p>I don't actually know Win32 but I should learn tbh</p>

<h2>Navigation</h2>
<div id="toc" class="toc" style="width:50%; margin:auto; text-align: left;">
<ul>
<li>
<a href="#MakeROMGBA">MakeROMGBA</a>
</li>
<li>
<a href="#AwesomeScreensaver">Awesome Screensaver</a>
</li>
<li>
<a href="#FiveNightsAtDatBois">Five Nights at Dat Boi's'</a>
</li>
<li>
<a href="#UnnamedJoke">Unnamed Joke Program</a>
</li>
</ul>
</div>

<h2 id="MakeROMGBA">MakeROMGBA</h2>
<p>
A crappy tool I wrote in 2016 to compile GBA ROMs with DevKit Advance.<br />
Alternative variants were made that used devkitARM, and one was made for <a
href="#SuperBlockJumpGBA">Super Block Jump (GBA)</a>.<br />
The devkitARM variants never reached the performance of DevKit Advance because they didn't use
the GCC optimization flags, but I didn't know that's how that worked. :P</br>
It is highly discouraged to use these, as they promote very unhealthy and wasteful compilation
habits. Not to mention, they're ONLY for Windows.
<img src="/assets/img/smileys/ragequit.gif">
</p>
<img width="720px" src="/assets/img/projects/win32/makeromgba/god why.png"><br />
<a href="/files/MakeROMGBA.zip">Source Code (here for archival purposes)</a><br />
<br />
<h2 id="AwesomeScreensaver">Awesome Screensaver</h2>
<p>
<b><u><i>WARNING: HEAVY EPILEPSY WARNING.</b></u></i><br />
This was a weird screensaver that I created using a <u>totally legal 100% legit</u> copy of
Clickteam Fusion 2.5 Developer back in 2018(?)<br />
I kinda ended up just clobbering images and gifs together to make whatever the hell this
is.<br />
This will only work under Windows, and at a resolution of 1440x900. Sorry Linux users! <img
src="/assets/img/smileys/sad.png"><br />
</p>
<video width="720" height="400" controls>
<source src="/assets/vid/awesomescreensaver.webm" type="video/webm">
</video>
<br />
<a href="/files/Awesome Screensaver.7z">Source Code + Executable (here for archival
purposes)</a><br />
<br />
<h2 id="FiveNightsAtDatBois">Five Nights at Dat Boi's</h2>
<p>
<b><u><i>WARNING: CERTIFIED CRINGE</b></u></i><br />
An unfinshed Five Nights at Freddy's clone that was made in a <u>totally legal 100% legit</u>
copy of Clickteam Fusion 2.5 Developer.<br />
Not sure when exactly it's dated, but I think it's late 2017.<br />
<img width="720px" src="/assets/img/projects/win32/fnadb/fnadb.png"><br />
<a href="/files/Five Nights at Dat Boi's.zip">Source Code + Executable (here for archival
purposes)</a><br />
</p>
<br />
<h2 id="UnnamedJoke">Unnamed Joke Program</h2>
<p>
An unnamed joke program that would change the wallpaper, play IMSCARED music, display message
boxes, and then kill csrss.exe<br />
</p>
<img width="720px" src="/assets/img/projects/win32/joke/joke.png"><br />
Note: Isn't actually fully functional on Windows 7. Use Windows XP.
<br />
<a href="/files/UnnamedJoke.zip">Source Code + Executable (here for archival purposes)</a><br />
<br />

<?php

echo constructPageFooter();

?>

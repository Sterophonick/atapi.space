<?php

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Homepage! :: Blog :: Enabling MIDI Support for Legacy WINE Gaming");

?>

<h1><img style="vertical-align:middle" src="/assets/img/blog/icon.png"> Enabling MIDI Support for Legacy WINE Gaming</h1>
<p style="margin-top: -25px;">skrillex scay onster an nice sprites midi<br/></p><br/>
<p>
February 8, 2025<br/>
Category: Tutorial<br/>
</p>
<br />
<h2>Introduction</h2>
<p>
You ever try playing a game that was made for Windows a good 20-30 years ago on Linux or your Steam Deck, only to find out that the music is completely missing?<br/><br/>
Believe it or not, it's not a WINE deficiency. Most Linux desktops don't automatically have a MIDI emulation server running unlike Windows. Here's how to fix it!<br/><br/>
<span style="color: #4FFF4F;">Steam Deck and Bazzite specific instructions will be highlighted in green!</span><br/><br/>
This guide also assumes that you're running your games through Steam!<br/><br/>
</p>
<h2>Step 1: Acquire Qsynth</h2>
<p>
Firstly, we'll need to actually get a working MIDI server, Qsynth works the best. Fetch it from your package manager either by the GUI of your choice or by the command of your choice.<br/><br/>
Arch Linux: <code>sudo pacman -S qsynth</code><br/>
Ubuntu Linux: <code>sudo apt-get install qsynth</code><br/>
Fedora Linux: <code>sudo dnf install qsynth</code><br/><br/>
<span style="color: #4FFF4F;">Steam Deck / Bazzite: You can either execute <code>flatpak install org.rncbc.qsynth</code> or install it through Discover.<br/></span>
<img width="512px" src="/assets/img/blog/winemidi/discover.png"><br/><br/>
</p>
<h2>Step 2: Acquire the Windows GM Synth Soudnfont</h2>
<p>
Download <a href="https://musical-artifacts.com/artifacts/713/gm.sf2">this soundfont</a> and place it in a spot you think is appropriate.<br/><br/>
This is important to provide the server with actual instruments for it to play.<br/><br/>
</p>
<h2>Step 3: Configuring Qsynth</h2>
<p>
Open Qsynth.<br/>
<img width="512px" src="/assets/img/blog/winemidi/qsynth1.png"><br/><br/>

Head over to the <code>Setup...</code> menu towards the bottom left. Then head to <code>Audio</code>. Set the Audio Driver to <code>pipewire</code>. This ensures we are outputting to a sound server that's actually good.<br/>
<img width="512px" src="/assets/img/blog/winemidi/qsynth2.png"><br/><br/>

Next, head to <code>Soundfonts</code>. Click on <code>Open</code>.<br/>
<img width="512px" src="/assets/img/blog/winemidi/qsynth3.png"><br/><br/>

Locate the soundfont file you just downloaded to set it as the default instrument bank.<br/>
<img width="512px" src="/assets/img/blog/winemidi/qsynth4.png"><br/><br/>

Exit the setup. Head over to the <code>Options...</code> menu that's located on the right.<br/>
Set <code>Enable system tray icon</code> and <code>Start minimized to system tray</code>.
<img width="512px" src="/assets/img/blog/winemidi/qsynth5.png"><br/><br/>

You're now finished configuring QSynth.
</p>
<h2>Step 4: Configuring Steam</h2>
<p>
Open Steam. Locate your game inside of Steam. In my case it's a non-Steam shortcut but it also works with Steam games.<br/>
<img width="512px" src="/assets/img/blog/winemidi/steam1.png"><br/><br/>

Using the Gear Icon open your game's properties menu.<br/>
<img width="512px" src="/assets/img/blog/winemidi/steam2.png"><br/><br/>

In the launch options section, you want to set the following:<br/>
<code>qsynth & %command% ; pkill -9 qsynth</code><br/>
<img width="512px" src="/assets/img/blog/winemidi/steam3.png"><br/><br/>

<span style="color: #4FFF4F;">Steam Deck / Bazzite: Since we're doing the Flatpak version of Qsynth we'll do this instead:
<code>flatpak run org.rncbc.qsynth & %command% ; pkill -9 qsynth</code><br/>
</span>
<img width="512px" src="/assets/img/blog/winemidi/steam4.png"><br/><br/>
</p>
<h2>Step 5: that is it</h2>
<p>
You are done. Your game's music should now work correctly. play now for free vbuck<br/><br/>
</p>
<img width="384px" src="/assets/img/blog/winemidi/much_obliged.jpg">

<?php

echo constructPageFooter();

?>

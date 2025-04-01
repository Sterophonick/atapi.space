<?php

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Homepage! :: Blog :: Adventures in Rock Band on Linux");

?>

<h1><img style="vertical-align:middle" src="/assets/img/blog/icon.png"> Adventures in Rock Band on Linux</h1>
<p style="margin-top: -25px;">It's no RB3Dx but it will do.<br/></p><br/>
<p>
March 27, 2025<br/>
Category: Project<br/>
</p>
<br />
<h2>Introduction</h2>
<p>
I played a bit of Rock Band with my family as a kid. I didn't pay much attention to it thought, you know. We mostly played LEGO Rock Band because it was more kid-friendly, with a "cleaner" song selection and a No-Fail mode. Then life got busy for about and fast forward to now, where it had been about ten years since we last played. I hadn't missed it up until recently, where I spent an evening at a friend's flat, and she has this fancy studio-grade MIDI drum kit attached to an Xbox 360 with a fancy MIDI-to-XInput adapter made specifically for Rock Band 3. I believe the drum kit was an Alesis Nitro Mesh.<br/><br/>
</p>
<img width="720px" src="/assets/img/blog/yarg/alesisnitromesh.png"><br/><br/>
<p>
Anyway, she also had this whole collection of guitars and that weird keyboard instrument, all made for a Rock Band 3 setup on her (unmodded) Xbox 360, complete with all sorts of custom tracks. We played songs like Cat Food by King Crimson, KOMM, SUSSER TOD from The End of Evangelion, Snow Halation from Love Live!, the uncensored version of Sir Psycho Sexy by Red Hot Chili Peppers, and my personal favorite, Live & Learn by Crush 40. It was an amazing night and I had forgetten how much fun Rock Band actually was with a group of people.<br/><br/>
It really got me thinking of ways to replicate a setup that would allow me to play Rock Band with my family just like how I did as a wee one. A bit of asking around and Googling led me to this little game called YARG, or <i>Yet Another Rhythm Game</i>, and down the rabbit hole I went.<br/><br/>
</p>
<h2>Yet Another Rhythm Game</h2>
<p>
A rather tongue-in-cheek name, but it's a <a href="https://github.com/YARC-Official/YARG">free and open-source</a> game for Windows, macOS, and Linux that aims to basically port Rock Band to PC.<br/><br/>
Anyway, YARG, right, it looks like this in practice:<br/>
<video width="720" height="405" controls>
<source src="/assets/vid/beverly.webm" type="video/webm">
<br/>
<span style="color: red">Your browser doesn't appear to be able to support this video.</span><br/>
</video>
<small>Used to Be Valentines - Beverly (The Good Years), Chart by YARC</small><br/><br/>
I think you see the idea, yes? This video only has a single player in it but it doesn't seem to have a limit on simultaneous players unlike Rock Band.<br/><br/>
As for the program itself, I find it mostly nice to use!<br/>
<img width="720px" src="/assets/img/blog/yarg/yarg_menu.png"><br/><br/>
It comes with a lot of options for tailoring your experience to <i>your</i> specific audio setup, as well as graphics settings for low-end computers, and chainging the highway presets just for fun!<br/>
<img width="720px" src="/assets/img/blog/yarg/yarg_settings.png"><br/><br/>
The song selection is very reminiscent of the Rock Band titles as well, which is a nice touch in my opinion.<br/>
<img width="720px" src="/assets/img/blog/yarg/yarg_selection.png"><br/><br/>
So, first thoughts are that YARG shows some great promise for those wanting to play all of their Guitar Hero and Rock Band charts!<br/><br/>
</p>
<h2>Songs and CONs</h2>
<p>
YARG ships with a good amount of tracks on its own, from some lovely artists like <i>Used to Be Valenties</i> and <i>Nine Inch Nails</i>, but we're here to focus on bringing our tracks from Rock Band to PC.<br/><br/>
The game is compatible with Clone Hero charts and Rock Band 3 CONs. Reading this at first, I was confused as to what a CON was, until I started examining ones that I found on RhythmVerse. Turns out that a CON is basically just an Xbox 360 STFS package containing a track for Rock Band, usually used with Rock Band 3, in fact the fan-made ones are in the exact same format as what Harmonix distributed on the Xbox LIVE Marketplace.<br/>
<img width="720px" src="/assets/img/blog/yarg/velocity.png"><br/><br/>

Most of our tracks will be fetched originally in Rock Band 3 CON format, which often works, but sometimes the encryption is incompatible with YARG, so the safer bet is to convert them using a suite of tools called <a href="https://nemosnautilus.com/nautilus/">Nautilus</a>.<br/>
<img src="/assets/img/blog/yarg/nautilus.png"><br/><br/>

Using the "Clone Hero Converter," we're able to convert these files into Clone Hero charts for better compatibility with YARG!<br/>
<img src="/assets/img/blog/yarg/nautilus2.png"><br/><br/>

There are a good 100,000 or so charts available over on RhythmVerse, however one of my pet peeves is when you find a track that you want, but it was only charted for Guitar on Expert difficulty. I get why people do it, but it's a bit annoying if you're looking for stuff to play with multiple people.<br/><br/>

Still, between that and ripping songs from Guitar Hero and Rock Band, you're able to make yourself a pretty extensive collection of nicely charted songs to play! My personal collection is currently about 165 songs, with a decent chunk coming from Rock Band DLC and LEGO Rock Band.<br/><br/>

There was one track, that being <i>The Distance</i> by CAKE, which was distributed as a chart for the Wii version of Rock Band 3. Some extra TLC had to go into that one. Firstly editing the <code>song.dta</code> file to remove a Wii-specific path that we don't need, and then using a tool called <a href="https://github.com/mtolly/onyx">Onyx</a> to convert it to a Rock Band 3 CON, and then using Nautilus to convert it to a Clone Hero chart. Yeah, it gets convoluted and you'll often be engineering solutions to problems on your own.<br/>
<video width="720" height="405" controls>
<source src="/assets/vid/distance.webm" type="video/webm">
<br/>
<span style="color: red">Your browser doesn't appear to be able to support this video.</span><br/>
</video>
<small>Cake - The Distance (Fashion Nugget), Chart by TheSpike/Nyxyxylyth</small><br/><br/>
At some point I do wanna learn to make my own charts so that I can make people play along to silly SiIvaGunner tracks. :3<br/><br/>
</p>
<h2>Input and Hardware</h2>
<p>
This one's probably the most troublesome with YARG on Linux, mostly because Unity's input system is straight-up busted over here. Xbox 360 peripherals do not work out of the box and you *have* to use Steam in order for it to be usable.<br/><br/>
YARG is capable of accepting MIDI devices, audio devices and SDL2 devices under Linux. Steam Input will properly expose input devices as SDL2 gamepads named "Steam Virtual Gamepad."<br/><br/>
Speaking of input devices, we need a way to actually use our instruments with a PC, which a cheap (and possibly crappy) Xbox 360 Wireless adapter from AliExpress does the job just fine.<br/>
<img width="384px" src="/assets/img/blog/yarg/adapter.png"><br/><br/>

From here, we can sync our instruments as if they were standard controllers. We run into another problem though, as Unity is incapable of determining what port each virtual gamepad is attached to. We have to blindly pick a device, numerous of which can be named "Steam Virtual Gamepad" for them to be properly detected. There's no real workaround and when you're trying to quickly set everything up it is a struggle, but it comes with the territory.<br/><br/>

Another roadblock, since we're on Linux tricking Unity into believing that we are using generic controllers out of necessity, we have to configure our instruments ourselves. For the guitars, this isn't so bad since they have enough inputs to combine menu controls and gameplay without and conflicts, but for drums it is a <i>struggle</i>.<br/><br/>

The drum set I was using was the set included with <i>The Beatles Rock Band</i>. Here's a helpful diagram to show what each button maps to:<br/>
<img width="384px" src="/assets/img/blog/yarg/drums.png"><br/><br/>

I'm sure the MIDI keyboard controller has an even more cursed layout than this.<br/><br/>

Anyway, this layout causes many problems with YARG, as YARG cannot interpret drum inputs with generic controllers at the time of writing. No matter how much I tried, I could not get a layout that did not have any conflicts. It was playable, sure, but hitting certain drums would break the current combo or one drum would fire two or more drums in-game. It's a mess, and this hassle is entirely the fault of Unity's input code being absolutely broken under Linux, as well as the <code>xpad</code> driver not reporting anything about device capabilities.<br/><br/>

The bottom line though, it can be done. There's just a lot of hoops to jump through here in penguin-land.<br/><br/>

For vocals, it's all pretty straightforward. Any wired or Bluetooth microphone will work just fine, including ones made specifically for Rock Band.<br/><br/>
</p>
<h2>Venues</h2>
<p>
YARG has support for what are called "Venues," which are little Unity scenes made to behave as a background. They can have animated environments and characters as well, so some talented folks can recreate background scenes like those seen in Rock Band.<br/>
There's a catch though on Linux, and it's that most of the Venues you find only have shaders made for Direct3D 11, whereas on Linux, we only have OpenGL and Vulkan. This causes incompatible scenes to render as mostly magenta. You need to be careful about what venues you have installed.<br/>
<img width="720px" src="/assets/img/blog/yarg/yarg_broken_shader.png"><br/><br/>
A good fallback option is to render WEBMs of scenes from Fortnite Festival or Rock Band, and they get the job done.<br/><br/>
</p>
<h2>Closing thoughts</h2>
<div style="width:65%; margin:auto; text-align:left">
<ul>
<li>Unity's input system is an absolute travesty under Linux.</li>
<li>YARG is great, but it's missing the bit of flair that RB3 does. I wonder if it's possible to do that in the future?</li>
<li>YARG needs to implement workarounds for <code>xpad</code>'s inability to detect device features. The input issues here are entirely a combination of Unity's crappiness and the Linux kernel but please PLEASE implement this down the line!</li>
<li>Oh, also a workaround for blindly selecting SDL devices to see if it works. Maybe like some kind of listen feature that allows the user to press a button on the device they want to use.</li>
<li>Custom charting tools for Linux?</li>
<li>Would it be more worth it to use RB3DX under RPCS3?</li>
<li>I missed playing Rock Band with my family. :3</li>
</ul>
</div>
<br/>
<img width="384px" src="/assets/img/blog/yarg/lrb.png">

<?php

echo constructPageFooter();

?>

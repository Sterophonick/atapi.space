<?php

$navContents = <<<EOF
    <ul>
        <li><a href="#p1">Introduction</a></li>
        <li><a href="#p2">Game Compatibility</a></li>
        <ul>
            <li><a href="#p2_1">Wall of Shame</a></li>
            <li><a href="#p2_2">Guidelines</a></li>
        </ul>
        <li><a href="#p3">Input Devices</a></li>
        <ul>
            <li><a href="#p3_1">Xbox Controllers</a></li>
            <li><a href="#p3_2">Nintendo Switch</a></li>
            <li><a href="#p3_3">PlayStation</a></li>
            <li><a href="#p3_4">Google Stadia</a></li>
            <li><a href="#p3_5">DolphinBar</a></li>
            <li><a href="#p3_6">Other Notes</a></li>
        </ul>
        <li><a href="#p4">VR Support</a></li>
        <li><a href="#p5">Handhelds</a></li>
        <ul>
            <li><a href="#p5_1">Steam Deck</a></li>
            <li><a href="#p5_2">Legion Go</a></li>
            <li><a href="#p5_3">ROG ALLY X</a></li>
            <li><a href="#p5_4">Others</a></li>
        </ul>
        <li><a href="#p6">Hardware Support</a></li>
        <li><a href="#p7">Modding</a></li>
        <li><a href="#p8">Conclusion</a></li>
    </ul>
EOF;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Domain! :: Blog :: The State of the Linux Desktop (2026 Edition)");

?>

<h2><img style="vertical-align:middle" src="/assets/img/blog/icon.png"> The State of the Linux Desktop (2026 Edition)</h2>
<p><code>/bin/round2</code><br/></p><br/>
<p>
Jan ??, 2026<br/>
Category: Recap<br/>
</p>
<br />
<p id="p1">Hello again, back for round 2 of this series. I hope I'm able to make a good enough recap of stuff that happened in 2025. Like the previous one, this round will still largely focus on video games, but I plan on including more general Linux desktop progress here. If there's something you wanted that I forgot, uhhh... sorry, this was all from <i>my</i> point of view.</p>
<br/>

<h2 id="p2">WINE 11.0</h2>
<p>
    As of writing, not quite out of Release Candidates, but WINE 11.0 is on the way, and will be arriving in January. A very non-exhaustive list of additions and improvements over 10.0 includes:<br/>
</p>
<ul class="centeredList">
    <li>Bluetooth driver, <code>winebth.sys</code></li>
    <li>WoW64 prefix mode, so 32-bit dependencies aren't required</code></li>
    <li>NTsync Thread Synchronization Support</li>
    <li>A bunch of WinRT support for UWP libraries</li>
    <li>Many improvements to Wayland support, not quite stable yet</li>
    <li>Many, many, many bug fixes.</li>
</ul>

<p>
    Proton will eventually be rebased on this new WINE stable release, and while on its own this won't improve many games too too much, it's be nice on the developer side since that means they can continue their work with a more up-to-date codebase. They won't have to keep any obsolete workarounds maintained anymore.
</p>

<br/>

<h2 id="p3">NTsync</h2>
<p>
    After a long time of development, Linux 6.14 included a new <code>misc</code> driver known as "NTsync." This driver doesn't communicate with any hardware, instead it is a kernel-level implementation of various Windows NT thread synchronization primitives. Essentially what that means is that Windows compatibility layers such as WINE are able to use this driver to more accurately and performantly emulate thread synchronization, compared to previous user-space implementations such as esync and fsync. WINE support for NTsync wasn't fully completed until WINE 10.16, however.<br/><br/>
    
    You might recall some buzz from Phoronix about how this driver gives performance increases upwards of 678%:<br>
    <img src="/assets/img/blog/penguin0126/ntsync.png"><br/><br/>
    
    This is only true for those who are using upstream WINE to play video games. For those using Proton, Wine-GE, or other gaming-patched WINEs, your improvements are more a matter of semantics. Not to say that there aren't games that are improved by this. <i>Call of Duty: Black Ops</i> and <i>Call of Duty: Black Ops II</i> have lots of framerate drops and stutters that are otherwise completely fixed with this new driver. My playthrough of BO2 had literally zero framedrops with an NTsync-patched Proton.<br/><br/>
    
    Comparison:
    <table align="center">
        <tr>
            <td>
                <img loading="lazy" class="galleryImg" src="/assets/img/blog/penguin0126/bo1-f.png">
                <p>FSync</p>
            </td>
            <td>
                <img loading="lazy" class="galleryImg" src="/assets/img/blog/penguin0126/bo1-n.png">
                <p>NTSync, same hardware</p>
            </td>
        </tr>
    </table>
    <small>(Screenshots courtesy of Linux for All @ YouTube)</small><br/><br/>
    
    NTsync might be available with Proton 11, if Valve deems it to be stable enough to ship to customers.
</p>
<br/>

<h2 id="p4">xbox_gip</h2>
<p>
    Nobody seems to really report on this.<br/><br/>
    
    <a href="https://github.com/evlaV/linux-integration/blob/6.16/integration/drivers/input/joystick/xbox_gip.c">Internally, in the SteamOS kernel</a>, there is an experimental new driver called <code>xbox_gip</code> intended to provide betters upport for Microsoft Game Input Protocol (GIP) devices intended for Xbox consoles. It supports only Xbox One/Series controllers, but the ground work is in place to support things like flight sticks and racing wheels, and the extra buttons of the Xbox Arcade Stick.<br/><br/>
    
    The SteamOS kernel also removes support for Xbox One devices from the <code>xpad</code> driver. I hope above all else that this helps take the place of drivers like <code>xpadneo</code> or <code>xone</code>.
</p>
<br/>

<h2 id="p5">Unleashed Recompiled</h2>
<p>
    Coming out of pretty much nowhere in March 2025, <a href="https://github.com/hedge-dev/UnleashedRecomp">Unleashed Recompiled</a> released on GitHub, providing a recompiled port of the Xbox 360 version of <i>Sonic Unleashed</i> available on Windows and Linux (and later macOS) without the use of an Xbox 360 emulator such as Xenia. Touting enhanced controller support, comprehensive PC settings, bug fixes, and a new renderer written from scratch for Direct3D 12 and Vulkan.<br/>
</p>
<br/>

<h2 id="p6">HedgeModManager 8</h2>
<p>
    One of the mod managers that annoyed me was HedgeModManager. It was Windows-only and written in .NET, so not only did it struggle with being stable it always had these weird graphical issues that .NET programs always seem to have in WINE. It also had issues with 64-bit games like Sonic Forces... for some reason? Anyway, all of this seems to have been fixed with the release of <a href="https://github.com/hedge-dev/HedgeModManager">HedgeModManager 8</a>, a complete multi-platform rewrite of this modloader, though with the crutch that it targets a Flatpak environment. Loading mods for Sonic the Hedgehog titles on Linux becomes less of an annoying hassle with this new rewrite.
</p>
<br/>

<h2 id="p7">Isle Portable</h2>
<p>
    Another source port available for Linux this year was <a href="https://github.com/isledecomp/isle-portable">Isle Portable</a>, a decompiled source port of <i>LEGO Island</i>. While this game isn't particularly amazing, it's still something special and trying to actually play this game, even on Windows, was an evil hack with an alternate installer and a patching tool, but now you can just use this and it simply just works. More Linux support here is always a good thing.<br/>
    <img src="/assets/img/blog/penguin0126/isle.png">
</p>
<br/>

<h2 id="p8">OpenGL Mesh Shaders</h2>
<p>
    Minecraft players with NVIDIA cards (Turing and newer) have had the luxury of being able to use a Sodium extension called <a href="https://github.com/MCRcortex/nvidium">Nvidium</a>, which takes advantage of the <code>GL_NV_mesh_shader</code> vendor extension to produce dense geometry extremely quickly. Developers for the <code>radeonsi</code> driver have implemented a generic version of this, <code>GL_EXT_mesh_shader</code>, <a href="https://gitlab.freedesktop.org/mesa/mesa/-/merge_requests/38044">into the Mesa project</a>, motivated at least in part by the demand for a generic Nvidium. 
</p>
<br/>

<h2 id="p9">WineGDK</h2>
<p>
    On Halloween, this <a href="https://www.reddit.com/r/linux_gaming/comments/1ol6f91/minecraft_bedrock_for_windows_not_education/">Reddit post</a> was made with a screenshot of Minecraft Bedrock Edition being played through WINE. Bedrock has been infamous in the Linux community for requiring the x86 Android version in order to play, so to see the Windows 10/11 version being played in WINE was a sight to behold.<br/>
    <img src="/assets/img/blog/penguin0126/winegdk.png"><br/><br/>
    
    Of course, this didn't just come from nothing. A pseudononymous developer by the name of "Weather" has created a fork of WINE (with a Proton build!) that <a href="https://github.com/Weather-OS/WineGDK">implements a lot of Windows Game Development Kit (GDK) components</a> on top of an existing WINE base, with the fork in question being named <i>WineGDK</i>. Components like <code>xgameruntime</code> and <code>gameinput</code> are implemented here, seemingly just enough to play Minecraft.<br/><br/>
    
    Weather wants this code to be brought upstream, but doing so themselves would require them to use their real name, effectively doxxing themselves. Hopefully another WINE developer can take notice of this code and adapt it upstream in some way.
</p>
<br/>

<h2 id="p10">NVK</h2>
<p>
    While not strictly being born in 2025, NVK, an open-source Vulkan driver for NVIDIA hardware has matured considerably throughout that year. As of now it is a fully Vulkan 1.4-conformant implementation, with about roughly half the performance of the NVIDIA Proprietary drivers (which I name as "nvprop"), <a href="https://www.phoronix.com/review/nvidia-980-5080-linux">according to Phoronix as of December 11.</a><br/><br/>
    
    (Right click to view full images)<br/>
    <table align="center">
        <tr>
            <td>
                <img loading="lazy" width="310px" src="/assets/img/blog/penguin0126/nvk_xon.png">
            </td>
            <td>
                <img loading="lazy" width="310px" src="/assets/img/blog/penguin0126/nvk_grav.png">
            </td>
        </tr>
    </table>
    <br/>
    
    I got to test this myself in June, with a test of Portal 2 yielding around 112 FPS on the highest settings at 1080P on a Quadro 3000 Laptop.<br/>
    <img src="/assets/img/blog/penguin0126/nvk-p2.jpg"><br/><br/>
    
    Also very much worth noting, Autumn "misyltoad" Ashton wrote a <a href="https://idtech.space/notice/AzDLHLfeOFEkNFNmtM">very preliminary implementation</a> of DLSS for NVK! At this very moment it only works if the DLSS binary is that has shipped with your game is compatible with the GPU that you are using, but it is working <i>enough</i> that <i>Control: Ultimate Edition</i> is able to use it with the right GPU.<br/>
    <img src="/assets/img/blog/penguin0126/nvk_dlss.jpg">
</p>
<br/>

<h2 id="p11">Steam Hardware</h2>
<p>
    In November, Valve announced two new pieces of Steam hardware. The Steam Machine, the Steam Controller, and the Steam Frame.<br/>
    <img src="/assets/img/blog/penguin0126/steam-hardware.png"><br/><br/>
    
    The Steam Machine and Steam Controller were last attempted back in 2015, when SteamOS was much less refined and based on Debian Linux instead of Arch. Both things were such a failure that it took until the release of the Steam Deck to get back on track, but with everything having gone so well with the Deck, they can expand their hardware ecosystem much more safely.<br/><br/>
    
    The Steam Machine has a new custom amd64 SoC based on Zen 3 and RDNA3, capable of some great 1080p gaming, or 4K if you're an FSR enjoyer. Valve claims that the machine is around 6x the performance of the Steam Deck, not that a simple number is a good way of measuring hardware capability.<br/><br/>
    
    The Steam Frame is the cool one, being a self-enclosed VR headset powered by a Qualcomm Snapdragon SoC, still running SteamOS, just compiled for ARM. In conjunction with the Steam Frame, Valve has introduced <a href="https://steamdb.info/app/3029110/info/">Steam Play <i>Lepton</i></a>, an Android compatiblity layer for (presumably) aarch64 Linux, supposedly being based on Waydroid, which is an Android container for Wayland platforms. The real question is how much of Waydroid are they actually using, especially since Waydroid requires a large image of LineageOS to function.<br/><br/>
    
    The other cool thing is aarch64 support being added to Proton. A git submodule for the <a href="https://github.com/FEX-Emu/FEX/tree/main">FEX Emulator</a> has been added to the main Proton repository, with FEX being a fast userland amd64 emulator for aarch64 Linux platforms. There's also aarch64 build instructions.<br/>
     <img src="/assets/img/blog/penguin0126/proton-aarch64.png"><br/><br/>
     
     That Steam Controller do be spicy though...
</p>
<br/>

<h2 id="p12">steamos-manager</h2>
<p>
    With the release of SteamOS-supported machines like the Lenovo Legion Go S, Vicki "endrift" Pfau has been contracted to write a background service called <a href="https://gitlab.steamos.cloud/holo/steamos-manager">steamos-manager</a>, as part of the work being done towards making SteamOS itself more generic. Its purpose is for controlling various hardware aspects such as TDP, Wi-Fi, GPU clocks, battery charge limits, and also replaces the <code>ds-inhibit</code> daemon from older builds of SteamOS.<br/><br/>
    
    So far, support for other handheld devices has been added to this service, such as the Legion Go family, GPD Win family, ONEXPLAYER machines, AOKZOE machines, AYANEO machines, etc. This is also in conjunction with SteamOS adopting <a href="https://github.com/ShadowBlip/InputPlumber">InputPlumber</a> to handle the fragmented controller inputs of these machines. InputPlumber on SteamOS combines all the odd input devices into one single <code>uhid</code> Steam Deck controller device, for Steam to use with Steam Input.<br/>
</p>
<br/>

<h2 id="p13">Xbox One Compatibility Layers</h2>
<p>
    Coming hot off the heels of the <a href="https://github.com/exploits-forsale/collateral-damage">Collateral Damage</a> exploit for the Xbox family of hardware, and making big progress in 2025, is <i>XWine1</i>, which is a translation layer for running Xbox One titles in Windows. While there are no public releases yet, the pictures and videos that they have released to their Twitter page are very impressive, and they even have gone through the trouble of implementing missing components for WINE environments, which makes me hope for better UWP support eventually. In this photo they released in January, they have it running on a Steam Deck OLED.<br/>
    <img src="/assets/img/blog/penguin0126/xwine1.jpg"><br/><br/>
    
    They have also shown other Linux systems running the compatibility layer, <a href="https://nitter.net/XWineOne/status/1907517872194330960#m">such as the PlayStation 4</a>.<br/>
    <img src="/assets/img/blog/penguin0126/xwine1_f.jpg"><br/><br/>
    
    While they don't have any public builds, I'm inclined to believe that the project is real, especially with the gameplay videos showing the DXVK HUD active and the work-in-progress photos of games like <i>Forza Motorsport 5</i>. There's just too much effort for this to be an attention grab.<br/><br/>
    
    Also worth noting is <i><a href="https://github.com/WinDurango/WinDurango">WinDurango</a></i>, which purports the same thing, just currently without the WINE support. Both projects are able to play <i>Minecraft: Xbox One Edition</i> completely, which is very promising.
</p>
<br/>

<h2 id="p14">Xenia-Canary Linux Builds</h2>
<p>
    This probably isn't exactly new, but it's something I only recently noticed, so I'm including it.<br/><br/>
    
    Xenia-Canary (the Xbox 360 emulator) has, at some point, become able to work correctly under most Linux environments. The last time that I tested this, the games always crashed the emulator on boot. Neat.<br/>
    <img src="/assets/img/blog/penguin0126/xenia.png"><br/><br/>
</p>
<br/>

<h2 id="p15">KDE Plasma</h2>
<p>
    KDE has kept up the train of improvements to its Plasma desktop environment all throughout this year. Some important highlights include:<br/>
</p>
<ul class="centeredList">
    <li>XRandR emulation in XWayland</li>
    <li>Improved HDR support for WINE/Proton under Wayland clients</li>
    <li>Fuzzy matching and immediate results in KRunner</li>
    <li>Support for dials and touch rings with drawing tablets.</li>
    <li>K.I.S.S. initial setup wizard for systems pre-installed with Plasma.</li>
    <li>Unified Permissions settings page for Flatpaks and other XDG apps</li>
    <li>One-click Flatpak installs from browsers</li>
    <li>Integration for connecting to networks via QR codes</li>
    <li>Rounded corners in the Breeze theme</li>
    <li>Proper screen mirroring support for Wayland</li>
    <li>DrKonqi crash reporter now handles non-KDE applications</li>
</ul>
<p>Plasma is the desktop that I use on a daily basis, and the rush of seeing awesome cool features and fixes get added to it every week is more potent than cocaine.</p>
<br/>

<h2 id="p16">Wayland Transition Progress</h2>
<p>
    The X Window System is on its way out on both Linux and BSD. The GNOME desktop environment has <a href="https://gitlab.gnome.org/GNOME/gnome-shell/-/merge_requests/3768">completely dropped support</a> for it and KDE <a href="https://blogs.kde.org/2025/11/26/going-all-in-on-a-wayland-future/">plans to do the same</a> for the release on Plasma 6.8, which is supposed to come out sometime in early 2027. Other desktop environments such as Cinnamon and Budgie are starting to adapt to the Wayland-only future.<br/><br/>
    
    It's not like all the legacy apps will magically stop working, they developed XWayland for this exact reason. The truth of the matter is that X11 was introduced back in 1984 as part of MIT's <i>Project Athena</i> and X11 is a series of weird hacks and patches to allow compatibility with newer graphics hardware. This is, in no uncertain terms, unsustainable long-term, and a major pain point for developers. Wayland compositors such as KWin and Mutter have decently matured, enough that I consider a Wayland session to be pretty stable now.<br/><br/>
    
    Not that there aren't pain points and issues remaining (fucking scaling...), we'll be stuck with those for a long time, but it's more stable for things like multi-monitor setups, VRR, and HDR than X11 ever will be. You can make your X Server forks with vaguely-fascist rhetoric in your pitiful little corner as you shrivel up into a corn cob.<br/><br/>
    
    With that being said, I'd like to take some space to make notes about specific programs that I happen to use.
</p>
<br/>

<h3 id="p16_1">fre:ac</h3>
<p>
    Fre:ac is an X11-only program that behaves very strangely with Wayland fractional scaling, especially on dual-monitor setups with unequal scaling. I don't know what its problem is.<br/>
    <img src="/assets/img/blog/penguin0126/freac_scale.png"><br/><br/>
</p>
<br/>

<h3 id="p16_1">Libreoffice</h3>
<p>
    Despite being a Wayland application, it has similar issues to fre:ac, causing the ribbon and document view to become way too small.
    <img src="/assets/img/blog/penguin0126/libreoffice_scale.png"><br/><br/>
</p>
<br/>

<?php echo constructPageFooter(); ?>

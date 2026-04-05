<?php

include $_SERVER['DOCUMENT_ROOT'] . '/includes/lastfm.php';

$customSideContent = <<<EOF
    <div class="extraSidebar window">
        <h4 style="text-align: center"><img class="pixelArt" style="vertical-align:middle" src="/assets/img/global/new.gif"> Site Updates!</h4>
        <div class="innerScrollBox" style="width: 229px; height: 350px;">
            <ul style="font-size: 13pt">
                <li>2026/04/05: Counter reset! Switched to gttfcount which allows for timed visits! Previous counter was at 226808.</li>
                <li>2025/12/29: new blog!! i summarize the current state of linux gaming again!</li>
                <li>2025/10/29: New blog post about a stupid iPhone</li>
                <li>2025/10/19: Lots of new gallery entries! Check 'em out!</li>
                <li>2025/09/21: New site layout! Currently very work-in-progress, not everything is finished, but damn does the site look so much cooler.</li>
            <ul>
        </div>
    </div>
    <div class="extraSidebar window">
        <h4 style="text-align: center">Site Settings</h4>
        <span title="Toggles the little cat that chases your mouse pointer."><input type="checkbox" onclick="showOneko()" id="enableOneko"><small>Disable Oneko</small></span><br/>
        <span title="Allow or disallow the music player from automatically playing music on page load."><input type="checkbox" onclick="musicCookie()" id="enableAutoplay"><small>Don't Autoplay Music</small></span><br/>
        <span title="Prevent the music player from automatically pausing on focus loss."><input type="checkbox" onclick="musicFocusCookie()" id="enablePauseOnFocus"><small>Don't Pause on Focus Loss</small></span><br/>
        <span title="Don't use CSS3 animations for the background. Can save resources on slower machines."><input type="checkbox" onclick="bgAnimCookie()" id="disableBgAnim"><small>Don't Animate Background</small></span>
    </div>
    <div class="sideFunFact window">
        <h4 style="text-align: center">Link my site!</h4>
        <p>
            Copy the text in the little white box to link it on your site!
        </p>
        <img class="pixelArt" src="/assets/img/buttons/atapi.gif"
        title="Made by @ZenithNeko and @ashie404!!! <3">
        <textarea id="homeButtonTextArea" rows="2" cols="10" readonly="" onclick="this.setSelectionRange(0, this.value.length)">
            <a href="https://atapi.space/"><img width="88px" height="31px" src="https://atapi.space/assets/img/buttons/atapi.gif" alt="Atapi's button!"></a>
        </textarea>
    </div>
EOF;

{
    $lastFmData = getLastFmData();
    
    $customSideContent .= <<<EOF
    <div class="sideFunFact window">
    <h4 style="text-align: center"><a href="https://www.last.fm/user/Sterophonick"><img class="headerIcon" width="32px" height="32px" src="/assets/img/home/lfm.png"></a> Last played:</h4>
    EOF;
    
    $customSideContent .= '<a id="lastFmLink" href="' . $lastFmData[4] . '" style="color: white; font-style: normal; text-decoration: none;">';
    $customSideContent .= '<table id="lastFmTable" border="0" cellpadding="0" cellspacing="3px" width="229px"><tr>';

    // print image in table, 32px width
    $customSideContent .= '<td width="32px"><img class="imgNoHover" width="32px" src="' . $lastFmData[3] . '"></td>';
    
    // print other data
    $customSideContent .= '<td><p class="lastFmTruncate"><i><img class="headerIcon imgNoHover" src="/assets/img/home/lastfmicons/track.png">' . $lastFmData[0] . '<br/><img class="headerIcon imgNoHover" src="/assets/img/home/lastfmicons/artist.png">' . $lastFmData[1] . '<br/><img class="headerIcon imgNoHover" src="/assets/img/home/lastfmicons/album.png">' . $lastFmData[2] . '<br/></i></p></td>';
    
    $customSideContent .= "</tr></table></a></div>";
    
}

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Domain!");

$imageURLs = array(
    "/assets/img/home/welcome.gif", "/assets/img/home/welcome2.gif", "/assets/img/home/welcome3.gif", "/assets/img/home/cowsay.png", "/assets/img/home/welcome4.gif"
);

echo '<img id="welcome" src="' . $imageURLs[ floor(rand() % sizeof($imageURLs))] . '" alt="Welcome to my homepage!" onclick="togglePotato()"/><br/><br/>';

?>


<script>
function togglePotato() {
    var potato = document.getElementById("potat");
    if (potato.style.display == "none") {
        potato.style.display = "block";
    } else {
        potato.style.display = "none";
    }
}
function friday() {
    var d = new Date();
    if (d.getDay() === 5) {
        //$("#fridey").load("/img/fridey.gif");
        document.getElementById('friday').innerHTML = '<img src="/assets/img/home/yakuzafriday.gif"/><br/><br/>';
    }
}
</script>

<h1><img style="vertical-align:middle" src="/assets/img/home/icon.png"> hiiiii!!! :3</h1>
<p>
Meowdy! I'm Atapi/Sterophonick <a href="pronouns/">(he/she/they)</a>, and welcome to my little corner of cyberspace! <br/><br/>

<img width="192px" src="/assets/img/global/2024pfp.png" style="float: right; border-radius: 3px; border: solid red 3px;" alt="Cropped artwork of an anthro white cat with red and blue stripes. They are wearing a blue hat, a black shirt, and a dark red sweatshirt. They are also doing a peace sign and winking at the viewer.">

By day, I'm studying computer engineering, and by night, I dabble in whatever weird rabbit hole currently has my attention. Game Boy Advance programming, vintage tech, emulation, sysadmin, Linux, what have you.<br/><br/>

Outside of computer touching, I like video games, cooking, and enjoying the company of those around me.<br/></br>

Initially, I created this website as a place to be a somewhat less professional CV, but over time, it's proven to be a valuable tool for keeping the dream of the decentralized personal web alive, from days of "Ned's Cape" or whatever it was called. With the web being more centralized than ever, it's increasingly important for people to carve out their own space on the information super highway. Nowadays, this is the place for me to archive things I've made, show off my cool link collection, or infodump about whatever crosses my mind.<br/>
</p>
<br />
<p>As always, remember, this website is perpetually UNDER CONSTRUCTION!</p>
<span alt="Under Construction!">
    <img src="/assets/img/home/under-construction-pikachu.gif"><img src="/assets/img/home/pika-hammer.gif"><img src="/assets/img/home/under-construction-pikachu.gif"><br />
</span>
<p>So, don't get startled if things change every so often.</p>
<br/>

<div id="friday"><script type="text/javascript">friday();</script></div>


<div id="buttons" class="buttonCollection" style="width: 100%; margin: auto; font-size:0%">
<a href="https://www.gameboy-advance.net/"><img src="/assets/img/buttons/gbanet.gif"></a>
<a href="https://www.mamedev.org/"><img src="/assets/img/buttons/mame.gif"></a>
<img src="/assets/img/buttons/linux.gif">
<img src="/assets/img/buttons/netscape.gif">
<img src="/assets/img/buttons/notepad.gif">
<a href="https://www.youtube.com/@Petscop/"><img src="/assets/img/buttons/childlibrary.gif"></a>
<img src="/assets/img/buttons/ie.gif">
<img width="88px" height="31px" src="/assets/img/buttons/sucks.gif">
<img src="/assets/img/buttons/php.gif">
<img src="/assets/img/buttons/ace.png">
<img src="/assets/img/buttons/kde.gif">
<a href="https://wetdry.world/@sterophonick"><img src="/assets/img/buttons/masto.gif"></a>
<img src="/assets/img/buttons/graphic.png">
<img src="/assets/img/buttons/nobiney.png">
<img src="/assets/img/buttons/eb.gif">
<img src="/assets/img/buttons/badapple.gif">
<a href="https://archive.org"><img src="/assets/img/buttons/archive.png"></a>
<img src="/assets/img/buttons/kromer.gif">
<a href="https://yesterweb.org/no-to-web3/"><img src="/assets/img/buttons/web3.gif"></a>
<img src="/assets/img/buttons/steam.gif">
<img src="/assets/img/buttons/fof.gif">
<img src="/assets/img/buttons/neofox_boom.gif">
<img src="/assets/img/buttons/blahaj.gif">
<img src="/assets/img/buttons/oneshot.gif">
<img src="/assets/img/buttons/ralsei.gif">
<img src="/assets/img/buttons/femboy.gif">
<img src="/assets/img/buttons/spotify.gif">
<img src="/assets/img/buttons/soder.gif">
<img src="/assets/img/buttons/source.png">
<img src="/assets/img/buttons/amd.gif">
<img src="/assets/img/buttons/epicblazed.png">
<img src="/assets/img/buttons/emulate.png">
<img src="/assets/img/buttons/jellyfin.png">
<img src="/assets/img/buttons/archlinux.gif">
<a href="https://pouet.net/"><img src="/assets/img/buttons/pouet.gif"></a>
<a href="https://www.vulkan.org/"><img src="/assets/img/buttons/vulkan.png"></a>
<img src="/assets/img/buttons/despacito.gif">
<a href="https://winehq.org/"><img src="/assets/img/buttons/wine.png"></a>
<img src="/assets/img/buttons/scene.png">
<a href="https://modarchive.org/"><img src="/assets/img/buttons/modarchive.gif"></a>
<img src="/assets/img/buttons/geo.gif">
<img src="/assets/img/buttons/atari.gif">
<img src="/assets/img/buttons/getplayer.gif">
<img src="/assets/img/buttons/steamdeck.png">
<img src="/assets/img/buttons/xbla.png">
<img src="/assets/img/buttons/openmpt.png">
<img src="/assets/img/buttons/webp.png">
<img src="/assets/img/buttons/nyancat.gif">
<a href="https://bazzite.gg"><img src="/assets/img/buttons/bazzite.png"></a>
<img src="/assets/img/buttons/homebrew.png">
<a href="https://amp.dascene.net"><img src="/assets/img/buttons/amp.jpg"></a>
<a href="https://gbadev.org"><img src="/assets/img/buttons/gbadev.gif"></a>
<a href="https://pdroms.de"><img src="/assets/img/buttons/pdroms.gif"></a>
<a href="https://scratch.mit.edu"><img src="/assets/img/buttons/scratch.png"></a>
<a href="https://web.archive.org/web/20240000000000*/playeradvance.org"><img
src="/assets/img/buttons/playeradvance.gif"></a>
<a href="https://web.archive.org/web/20240000000000*/nintendomax.com"><img
src="/assets/img/buttons/nintendomax.gif"></a>
<a href="https://dcemu.co.uk"><img src="/assets/img/buttons/dcemu.gif"></a>
<a href="https://web.archive.org/web/20240000000000*/vbalink.info"><img
src="/assets/img/buttons/vbalink.gif"></a>
<a href="https://web.archive.org/web/20240000000000*/gbxemu.com"><img
src="/assets/img/buttons/gbxemu.gif"></a>
<a href="https://web.archive.org/web/20240000000000*/emuvortex.com"><img
src="/assets/img/buttons/emuvortex.gif"></a>
<a href="https://web.archive.org/web/20240000000000*/lik-sang.com"><img
src="/assets/img/buttons/liksang.png"></a>
<a href="https://www.youtube.com/channel/UC9ecwl3FTG66jIKA9JRDtmg"><img
src="/assets/img/buttons/siivagunner.png"></a>
<img src="/assets/img/buttons/scott.png">
<a href="https://priyom.org"><img src="/assets/img/buttons/priyom.gif"></a>
<a href="https://signalshed.com"><img src="/assets/img/buttons/enigma2k.png"></a>
<a href="https://eightyeightthirty.one"><img src="/assets/img/buttons/88x31.png"></a>
<a href="https://www.defectivebydesign.org"><img src="/assets/img/buttons/dbd.png"></a>
<img src="/assets/img/buttons/amogus.gif">
<img src="/assets/img/buttons/boom.gif">
<img src="/assets/img/buttons/silicon.GIF">
<img src="/assets/img/buttons/bonzi.GIF">
<a href="https://cobalt.tools"><img src="/assets/img/buttons/cobalt.gif"></a>
<img src="/assets/img/buttons/rockband.png">
<img src="/assets/img/buttons/lego.gif">
<a href="https://flipperzero.one/"><img src="/assets/img/buttons/flipper.gif"></a>
<a href="https://starfall.com/"><img src="/assets/img/buttons/starfall.png"></a>
<a href="/interstitial.php?name=VG Cats&dest=https://vgcats.com/"><img src="/assets/img/buttons/vgcats.gif"></a>
<a href="https://web.archive.org/web/20250000000000*/http://www.geocities.co.jp/Playtown-Yoyo/6130/"><img src="/assets/img/buttons/letsemu.gif"></a>
<a href="https://retroguru.com/"><img src="/assets/img/buttons/retroguru.png"></a>
<img src="/assets/img/buttons/ac2001central.gif">
<iframe src="//incr.easrng.net/badge?key=atapi_inc_key_dont_steal" style="background: url(//incr.easrng.net/bg.gif)" title="increment badge" width="88" height="31" frameborder="0"></iframe>
<img src="/assets/img/buttons/freakmode.gif">
<a href="https://cachyos.org"><img src="/assets/img/buttons/cachyos.png"></a>
</div>

<span id="potat" style="display: none;">
    <br/>
    <marquee><img src="/assets/img/home/potato.gif"></marquee>
</span>

<?php

echo constructPageFooter();

?>

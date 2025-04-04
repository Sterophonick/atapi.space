<?php

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Homepage!");

$imageURLs = array(
    "/assets/img/home/welcome.gif", "/assets/img/home/welcome2.gif", "/assets/img/home/welcome3.gif", "/assets/img/home/cowsay.png", "/assets/img/home/welcome4.gif"
);

echo '<br/><img id="welcome" src="' . $imageURLs[ floor(rand() % sizeof($imageURLs))] . '" alt="funny meme" onclick="togglePotato()"/>';

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

<h1><img style="vertical-align:middle" src="/assets/img\home\icon.png"> hiiiii!!! :3</h1>
<p>
hiya! I'm Atapi / Sterophonick <a href="pronouns/">(he/she/they)!</a> I am a
cute kitty cat on the internet that has been touching computers for about as long as I can really remember. I work with Linux and old tech, emulation, reverse engineering, and the like! :3
</p>
<br />
<img class="pixelArt" src="/assets/img/home/construction.gif" title="Under construction!"><br />
<p>
This site is basically my little zone on the internet, a hub for my projects and my weird ramblings. Come in and take a look! <img src="/assets/img/smileys/wink.png"><br />
</p>
<br />

<div id="friday"><script type="text/javascript">friday();</script></div>

<p>
Here's my web button to link on your own site!<br />
<img class="pixelArt" src="/assets/img/buttons/atapi.gif"
title="Made by @ZenithNeko and @ashie404!!! <3"><br />
<br />
While you're here, why don't you sign my guestbook!<br />
<a class="pixelArt" href="/guestbook"><img
src="/assets/img/home/guestbook.gif"></a><br />
</p>
<br />

<?php

if(!isOutdatedBrowser()) {
echo <<<EOF
<div id="lastFMBox">
    <p>oh, here's what i've been listening to lately!</p>
    <iframe alt="(Content cannot be displayed for some reason.)" width="400px" height="391px" src="https://lastfm-recently-played.vercel.app/api?user=Sterophonick&count=6&loved=true&show_user=header&bg_color=00000000" style="border: 2px solid #FF0000; border-radius: 8px"></iframe>
    <p style="font-size:12pt">LastFM integration courtesy of <a
    href="https://github.com/JeffreyCA/lastfm-recently-played-readme">JeffreyCA</a>.</p>
    <br />
    <br />
</div>
EOF;
}
?>

<div id="buttons" class="pixelArt" style="width: 80%; margin: auto; font-size:0%">
<a href="https://www.gameboy-advance.net/"><img src="/assets/img/buttons/gbanet.gif"></a>
<a href="https://www.mamedev.org/"><img src="/assets/img/buttons/mame.gif"></a>
<img src="/assets/img/buttons/linux.gif">
<img src="/assets/img/buttons/netscape.gif">
<img src="/assets/img/buttons/notepad.gif">
<a href="https://www.youtube.com/@Petscop/"><img
src="/assets/img/buttons/childlibrary.gif"></a>
<img src="/assets/img/buttons/ie.gif">
<img width="88px" height="31px" src="/assets/img/buttons/sucks.gif">
<img src="/assets/img/buttons/nocookie.gif">
<img src="/assets/img/buttons/ace.png">
<a href="https://ashiecorner.xyz"><img src="/assets/img/buttons/ashie404.gif"></a>
<a href="https://zencorner.xyz"><img src="/assets/img/buttons/zenithneko.gif"></a>
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
<img src="/assets/img/buttons/mother.gif">
<img src="/assets/img/buttons/fof.gif">
<img src="/assets/img/buttons/neofox_boom.gif">
<a href="https://elizafox.space/"><img src="/assets/img/buttons/elizafox.png"></a>
<a href="https://zenthefox.online/"><img src="/assets/img/buttons/zennow.gif"></a>
<a href="https://tauon.dev/" target="_blank">
<img src="/assets/img/buttons/lily.png" alt="lily" width="88" height="31"
style="image-rendering: pixelated" title="do hotlink my button!"/>
</a>
<img src="/assets/img/buttons/blahaj.gif">
<img src="/assets/img/buttons/oneshot.gif">
<a href="https://bee.movie/"><img src="/assets/img/buttons/beebadge.png" title="<3"></a>
<a href="https://foxboy.dev/"><img src="/assets/img/buttons/ryfox.png"></a>
<a href="https://pivotman319-owo.github.io/"><img src="/assets/img/buttons/pivotman.png"></a>
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
<a href="https://kaleidosium.my.id/"><img src="/assets/img/buttons/dania.png"></a>
<a href="https://ayetsg.com/"><img src="/assets/img/buttons/ayetsg.png"></a>
<img src="/assets/img/buttons/openmpt.png">
<img src="/assets/img/buttons/webp.png">
<a href="https://www.youtube.com/@VinsCool"><img src="/assets/img/buttons/vinvin.gif"></a>
<img src="/assets/img/buttons/nyancat.gif">
<a href="https://bazzite.gg"><img src="/assets/img/buttons/bazzite.png"></a>
<a href="https://kokoscript.com"><img src="/assets/img/buttons/kokoscript.gif"></a>
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
<a href="https://dianaisnthere.codeberg.page/"><img src="/assets/img/buttons/diana.png"></a>
<a href="https://leggi.es/"><img src="/assets/img/buttons/deneb.gif"></a>
<a href="https://maidado.xyz/"><img src="/assets/img/buttons/maidado.png"></a>
<a href="https://micro.niko.lgbt/"><img src="/assets/img/buttons/micro.png"></a>
<a href="https://sneexy.pages.gay/"><img src="/assets/img/buttons/sneexy.gif"></a>
<a href="https://j4.lc/"><img src="/assets/img/buttons/j4.png"></a>
<a href="https://aquamarine.gay/"><img alt="A web button that says 'Aquamarine's Aquarium' with an image of a light blue creature, with yellow accents, purple hair, and a maroon coat, that is an anthropomorphic axolotl and a cat." src="/assets/img/buttons/aqua.png" title="A web button that says 'Aquamarine's Aquarium' with an image of a light blue creature, with yellow accents, purple hair, and a maroon coat, that is an anthropomorphic axolotl and a cat." style="image-rendering: pixelated;"></a>
<a href="https://priyom.org"><img src="/assets/img/buttons/priyom.gif"></a>
<a href="https://signalshed.com"><img src="/assets/img/buttons/enigma2k.png"></a>
<a href="https://eightyeightthirty.one"><img src="/assets/img/buttons/88x31.png"></a>
<a href="https://www.defectivebydesign.org"><img src="/assets/img/buttons/dbd.png"></a>
<img src="/assets/img/buttons/amogus.gif">
<a href="https://invoxiplaygames.uk/"><img src="/assets/img/buttons/ipg.png"></a>
<img src="/assets/img/buttons/boom.gif">
<a href="https://essem.space/"><img src="/assets/img/buttons/essem.png"></a>
<a href="https://velveteen.one/"><img src="/assets/img/buttons/velbadge.png"></a>
<img src="/assets/img/buttons/silicon.GIF">
<img src="/assets/img/buttons/bonzi.GIF">
<a href="https://moule.world/"><img src="/assets/img/buttons/moule.gif"></a>
<a href="https://cobalt.tools"><img src="/assets/img/buttons/cobalt.gif"></a>
<img src="/assets/img/buttons/rockband.png">
<a href="/interstitial.php?name=Xaselgio's Den&dest=https://xaselgio.net"><img src="/assets/img/buttons/xaselgio.gif"></a>
<br />
<img src="/assets/img/home/linuxfox-comp.gif">
<marquee id="potat" style="display: none;"><img src="/assets/img/home/potato.gif"></marquee>
</div>

<?php

echo constructPageFooter();

?>

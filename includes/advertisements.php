<?php

# this lil module will select a random image with a corresponding link in order to generate "advertisements"
# they're not real but they are tagged so if you hate them you can block them with your adblocker
# the ads will be advertising old dead things like flashcarts, ROM sites, old PC vendors, modchip vendors, old gaming communities
# the vast majority of the stuff here is long dead or obsolete. it's primarily for the sake of aesthetics and humor.

$adList = array(
    "/assets/img/ads/ezf-advance.jpg","https://web.archive.org/web/20051110001843/http://linker4u.com/pp/item_detail.asp?itemID=F7732E8A-DE5F-401F-81DF-29793809ED30",
    "/assets/img/ads/f2a.jpg","https://web.archive.org/web/20060430214714/http://www.linker4u.com/pp/item_detail.asp?itemID={BED20706-33CF-4A2F-B958-85E1A552A0D1}",
    "/assets/img/ads/gbax.gif","https://web.archive.org/web/20050226021427/http://gbax.com/",
    "/assets/img/ads/gbax2.jpg","https://web.archive.org/web/20050305040243/http://www.gbax.com/new/devk.html",
    "/assets/img/ads/gp2x.gif","https://web.archive.org/web/20081217050746/http://www.gp2xstore.com/",
    "/assets/img/ads/linker4u-ps2.gif","https://web.archive.org/web/20060516004053/http://www.linker4u.com/pp/item_detail.asp?itemID={0B79FCA7-7983-4A42-B3EC-BE32CC551595}",
    "/assets/img/ads/mrmodchips.jpg","https://web.archive.org/web/20050830001322/http://www.mrmodchips.com/catalog/",
    "/assets/img/ads/playasia.gif","https://web.archive.org/web/20040619085139/http://www.play-asia.com/",
    "/assets/img/ads/ps3.gif","https://web.archive.org/web/20070403042915/http://www.superufo.com/pp/category.asp?category_id={B46B4851-B052-4B10-BE0B-7368C50E50FC}",
    "/assets/img/ads/psp2banner.gif","",
    "/assets/img/ads/romcenter.gif","https://web.archive.org/web/20050901014923if_/http://www.romcenter.com:80/",
    "/assets/img/ads/xg2_new_e.gif","https://web.archive.org/web/20040623184437/http://www.xgflash2.com/",
    "/assets/img/ads/decalgirl.gif","https://web.archive.org/web/20060604090849/http://www.decalgirl.com/",
    "/assets/img/ads/binarygame.gif","https://web.archive.org/web/20041001030827/http://www.binarygame.com/catalog/default.php",
    "/assets/img/ads/xboxcore.jpg","https://web.archive.org/web/20050829040720/http://xboxcore.com/",
    "/assets/img/ads/xbox-hq.gif","https://web.archive.org/web/20120217134941/https://www.xbox-hq.com/html/",
    "/assets/img/ads/designerskins.jpg","https://web.archive.org/web/20050606011207/http://designerskins.com/",
    "/assets/img/ads/blaze.gif","https://web.archive.org/web/20050914154444/http://www.linker4u.com/pp/default.asp",
    "/assets/img/ads/linker4u.gif","https://web.archive.org/web/20050914154444/http://www.linker4u.com/pp/default.asp",
    "/assets/img/ads/x360central.jpg","https://web.archive.org/web/20050829122328/http://www.x360central.com/",
    "/assets/img/ads/treamcast.gif","https://web.archive.org/web/20050204170620/http://www.superufo.com/",
    "/assets/img/ads/xbox-chipz.gif","https://web.archive.org/web/20050220045421/http://www.xbox-chipz.co.uk/",
    "/assets/img/ads/maxmedia.gif","",
    "/assets/img/ads/sundisk.gif","https://web.archive.org/web/20080722201804/https://www.d2sun.com/",
    "/assets/img/ads/psjailbreak.gif","",
    "/assets/img/ads/pandora.gif","https://web.archive.org/web/20080828032422/http://www.openpandora.de/",
    "/assets/img/ads/retrobase.gif","https://web.archive.org/web/20050218030747/http://www.retrobase.net/",
    "/assets/img/ads/kmru.gif","",
    "/assets/img/ads/mame.gif","https://mamedev.org/",
    "/assets/img/ads/gbahome.jpg","",
    "/assets/img/ads/macmall.gif","",
    "/assets/img/ads/presario.gif","https://web.archive.org/web/20060113065332/http://www.microwarehouse.co.uk/",
    "/assets/img/ads/yahoo.gif","https://web.archive.org/web/20050828081818/http://pager.yahoo.com/",
    "/assets/img/ads/digital.gif","",
    "/assets/img/ads/ringtone.jpg","",
    "/assets/img/ads/kenobi.jpg","https://web.archive.org/web/20120508111732/https://monicawankenobi0.tripod.com/index.html", // what the hell?
    "/assets/img/ads/dollars4mail.gif","",
    "/assets/img/ads/pentium3.gif","",
    "/assets/img/ads/win95.gif","https://web.archive.org/web/19990219162624/http://www3.windows95.com/", // also what?
    "/assets/img/ads/netcenter.gif","https://web.archive.org/web/20011114235829/http://home.netscape.com/ex/shak/index.html",
    "/assets/img/ads/flash.gif","https://web.archive.org/web/20000510023214/http://macromedia.com/",
    "/assets/img/ads/ibm-buy.gif","https://web.archive.org/web/20000229080028/http://www.buy.com/",
    "/assets/img/ads/ibm97.gif","https://web.archive.org/web/19970103065909/http://www.worldavenue.com/",
    "/assets/img/ads/at-t-the-first-banner-1994.png","", // this originally was tied to AT&T but it's way way funnier if there's no link
    "/assets/img/ads/divineo1.jpg","https://web.archive.org/web/20101106065123/http://www.divineo.com/cgi-bin/div-us/index.html",
    "/assets/img/ads/divineo2.jpg","https://web.archive.org/web/20101106065123/http://www.divineo.com/cgi-bin/div-us/index.html",
    "/assets/img/ads/divineo3.gif","https://web.archive.org/web/20101106065123/http://www.divineo.com/cgi-bin/div-us/index.html",
    "/assets/img/ads/hdfury.gif","https://web.archive.org/web/20110408082113/http://www.hdfury.com/",
    "/assets/img/ads/divineo4.gif","https://web.archive.org/web/20101106065123/http://www.divineo.com/cgi-bin/div-us/index.html",
    "/assets/img/ads/nokia.gif","https://web.archive.org/web/20150111073548/http://www.filibeto.org/mobile",
    "/assets/img/ads/sun.gif","https://web.archive.org/web/19990208010422/http://sun.com/",
    "/assets/img/ads/dvd.gif","https://boxy.neocities.org/shrek2dvd/main",
    "/assets/img/ads/tridek.gif","",
    "/assets/img/ads/liksang.gif","https://web.archive.org/web/20040000000000*/lik-sang.com",
    "/assets/img/ads/liksang2.gif","https://web.archive.org/web/20040000000000*/lik-sang.com",
    "/assets/img/ads/liksang3.gif","https://web.archive.org/web/20040000000000*/lik-sang.com",
    "/assets/img/ads/ps2.gif","",
    "/assets/img/ads/cd-r.gif","https://web.archive.org/web/20040618182818/http://reviews.cnet.com/2001-1_7-0.html",
    "/assets/img/ads/seti.gif","",
    "/assets/img/ads/windowsxp.gif","",
    "/assets/img/ads/garfield.gif","",
    "/assets/img/ads/playstation.gif","",
    "/assets/img/ads/n64.gif","",
    "/assets/img/ads/mod-chip.gif","https://web.archive.org/web/20050608032340/http://www.mod-chip.com/",
    "/assets/img/ads/pinnacle.gif","",
    "/assets/img/ads/net2phone.gif","https://web.archive.org/web/20050628011416/http://net2phone.com/",
    "/assets/img/ads/office97.gif","",
    "/assets/img/ads/net1.gif","https://web.archive.org/web/20050211042143/http://www.thenet1.com/",
    "/assets/img/ads/xpmagazine.gif","",
    "/assets/img/ads/x-rom.jpg","https://web.archive.org/web/20010712060028/http://www.easybuy2000.com/",
    "/assets/img/ads/aep.jpg","https://www.aep-emu.de/",
    "/assets/img/ads/amipc.gif","",
    "/assets/img/ads/amiem.gif","",
    "/assets/img/ads/c64banner.gif","",
    "/assets/img/ads/emuzone.gif","https://web.archive.org/web/20050211033831/http://www.computeremuzone.com/",
    "/assets/img/ads/datamation.gif","",
    "/assets/img/ads/98semp.gif","",
    "/assets/img/ads/nec.gif","",
    "/assets/img/ads/toshiba.gif","",
    "/assets/img/ads/nochoice.gif","http://toastytech.com/evil/index.html",
    "/assets/img/ads/consolefever.gif","https://web.archive.org/web/20050204195159/http://www.consolefever.com/customer/home.php",
    "/assets/img/ads/OCH.gif","https://web.archive.org/web/20020802034137im_/http://www.cpufx.com/images/banners/OCH.gif",
    "/assets/img/ads/bcentral.gif","",
    "/assets/img/ads/gifts.gif","",
    "/assets/img/ads/saroko.gif","",
    "/assets/img/ads/babakaram.gif","",
    "/assets/img/ads/cwnet.gif","https://web.archive.org/web/20020331123649/http://www.cwnet.com/",
    "/assets/img/ads/intboost.gif","",
    "/assets/img/ads/freecell.gif","https://web.archive.org/web/20020101000000*/freecell.com",
    "/assets/img/ads/sonicwall.gif","",
    "/assets/img/ads/sabrina.gif","https://www.sabrina-online.com/", // Sabrina <3
    "/assets/img/ads/semiconductor.gif","https://britneyspears.ac/lasers.htm", // britney spears teaches semiconductors :3
    "/assets/img/ads/advision.png","http://www.adventurevision.com/",
    "/assets/img/ads/freepenguin.png","https://www.free-penguin.org/",
    "/assets/img/ads/gp32_gbax.jpg","https://web.archive.org/web/20041204053612/http://www.gbax.com/new/gp32.html",
    "/assets/img/ads/psp_shk.gif","",
    "/assets/img/ads/modchipman.gif","https://web.archive.org/web/20050204040847/http://modchipman.com/",
    
    "/assets/img/ads/voice-email.gif","https://web.archive.org/web/20000621105910/http://www.bonzi.com/voiceemail/voice.asp",
    "/assets/img/ads/cyberspace.gif","",
    "/assets/img/ads/netscape3.gif","",
    "/assets/img/ads/navigator.gif","",
    "/assets/img/ads/xinga.gif","",
    "/assets/img/ads/kbkids.jpeg","",
    "/assets/img/ads/win-embedded.gif","",
    "/assets/img/ads/faprolinker.gif","",
    "/assets/img/ads/modchip-com.gif","",
    "/assets/img/ads/ilisten.gif","",
    "/assets/img/ads/bonzi.gif","https://web.archive.org/web/20020806011421/http://www.bonzi.com/BonziBUDDY/BonziBUDDYFREEhom.asp",
    "/assets/img/ads/virus-warning.gif","",
    "/assets/img/ads/mag-portables.gif","",
    "/assets/img/ads/free-modem.gif","",
    "/assets/img/ads/zoom-modem.gif","https://web.archive.org/web/20001205120800/http://www.lektech.com/",
    "/assets/img/ads/freeDOS.png","https://www.freedos.org/",
    "/assets/img/ads/freeDOS2.png","https://www.freedos.org/",
    "/assets/img/ads/hopkins-fbi.gif","https://web.archive.org/web/20020606033013/http://www.polyex.com/hopkins.html",
    "/assets/img/ads/speakeasy.gif","https://web.archive.org/web/20021129095208/http://anandtech.com/",
    "/assets/img/ads/linuxstore.gif","https://web.archive.org/web/20020127124143/http://www.linuxcity.com.cn/",
    "/assets/img/ads/vrml.gif","https://web.archive.org/web/19970629003853/http://vrml.sgi.com/intro.html",
    "/assets/img/ads/sonic_r.gif","https://web.archive.org/web/20180830145248/https://www.deviantart.com/comickpro/art/Tails-Doll-79228090",
    "/assets/img/ads/download.gif","",
    "/assets/img/ads/ie4.gif","",
    "/assets/img/ads/napsteralts.gif","",
    "/assets/img/ads/paying_too_much.gif","",
    "/assets/img/ads/unreal.gif","",
    "/assets/img/ads/via.gif","",
    "/assets/img/ads/maxpayne.gif","",
    "/assets/img/ads/computermonkey.gif","",
    "/assets/img/ads/bizkit.gif","",
    "/assets/img/ads/macromedia.gif","",
    "/assets/img/ads/soundblaster.gif","",
    "/assets/img/ads/macg4.gif","",
    "/assets/img/ads/cybertown.gif","https://web.archive.org/web/19970618111815/http://www.cybertown.com/",
    "/assets/img/ads/geocities_japan.gif","https://web.archive.org/web/20050509010514im_/http://www.geocities.jp/js_source/filler_n.gif",
    "/assets/img/ads/dtv.gif","https://www.dtvanswers.com/", // image came from friend aquamarine
    "/assets/img/ads/skyline.gif","https://web.archive.org/web/19980524080104/http://www.farallon.com/product/fen/",
    "/assets/img/ads/dave-mac.gif","", //what exactly did this link to?
    "/assets/img/ads/webstar.gif","https://web.archive.org/web/19990417101044/http://www.reproduce.com/",
    "/assets/img/ads/piccolo-drive.gif","",
    "/assets/img/ads/quake.jpeg","",
    "/assets/img/ads/tucows.gif","https://web.archive.org/web/19961228134206/http://www.tucows.com/",
    "/assets/img/ads/connecsoft-email.gif","",
    "/assets/img/ads/bell-isdn.gif","https://web.archive.org/web/19981201204451/http://www.bell-atl.com/",
    "/assets/img/ads/compaq-vms.gif","https://web.archive.org/web/19990208005657/http://openvms.digital.com/openvms/72ship.html",
    "/assets/img/ads/roadrunner.gif","https://web.archive.org/web/20010806213847/http://mktg.roadrunner.com/rr/roadrunner/requestservice",
    "/assets/img/ads/powerbook.gif","",
    "/assets/img/ads/linuxban.gif","https://cachyos.org/",
    "/assets/img/ads/lilabanner.gif","https://web.archive.org/web/20010516210343/http://www.linuxlabs.com/",
    "/assets/img/ads/icewalkers.gif","https://web.archive.org/web/20010517002008/http://www.icewalkers.com/",
    "/assets/img/ads/win4lin.gif","https://web.archive.org/web/20010309112655/http://www.netraverse.com/",
    "/assets/img/ads/xmms.gif","https://web.archive.org/web/20020124061838im_/http://www.xmms.org/",
    "/assets/img/ads/xfce.gif","https://web.archive.org/web/20011202172226im_/http://www.xfce.org/",
    "/assets/img/ads/turbolinux.gif","https://web.archive.org/web/20011203223913im_/http://www.turbolinux.com/",
    "/assets/img/ads/web-for-dummies.gif","https://web.archive.org/web/20011216094354im_/http://www.web-for-dummies.com/home.shtml",
    "/assets/img/ads/linuxapps.gif","https://web.archive.org/web/20010620222827/http://linuxapps.com/",
    "/assets/img/ads/tyra2.gif","https://web.archive.org/web/20000621044714/http://www.warpsite.de/",
    
    // screw it, why don't we just advertise old demoparties now! :3
    "/assets/img/ads/breakpoint07.gif","https://web.archive.org/web/20070218142326/http://breakpoint.untergrund.net/",
    "/assets/img/ads/breakpoint10.gif","https://web.archive.org/web/20100307211623/http://breakpoint.untergrund.net/",
    "/assets/img/ads/assembly04.gif","https://web.archive.org/web/20040701110914/http://www.assembly.org/",

    // made by @hootwheelz@blahaj.zone
    "/assets/img/ads/sgi.gif","",
    "/assets/img/ads/os2.gif","",
    "/assets/img/ads/afterburner.gif","https://web.archive.org/web/20030524123759/http://tritonlabs.com/",
    
    // made by 7nonsense.neocities.org
    "/assets/img/ads/game_boy_pocket.gif","http://www.nintendo.co.jp/n02/dmg/hardware/gbp/index.html",
    "/assets/img/ads/game_boy_light.gif","http://www.nintendo.co.jp/n02/dmg/hardware/light/index.html",
    "/assets/img/ads/virtual_boy.gif","http://web.archive.org/web/19970128181120/http://www.nintendo.co.jp/n02/vue/index.html",
    "/assets/img/ads/mavica.gif","http://web.archive.org/web/20000621133757/http://www.sel.sony.com/SEL/consumer/dimaging/browse_the_products/digital_mavica_camera/mavica_models/index.html",
    "/assets/img/ads/psion.gif","http://www.jaapsch.net/psion/index.htm",

    // made by me!
    "/assets/img/ads/java-funny.gif","https://www.youtube.com/watch?v=jwJvj7BV41g", // idea came from friend jae
    
    // comes from the deltarune sweepstakes
    "/assets/img/ads/dr-secrets.gif","https://deltarune.com/code/",
    "/assets/img/ads/dr-icee.gif","https://deltarune.com/icee/",
    "/assets/img/ads/dr-prize.gif","https://deltarune.com/secretpipis/",
    "/assets/img/ads/dr-youve-won.gif","https://deltarune.com/secret/",

    // subject to break if this site ever kicks the bucket. remove this if it does.
    "http://www.aep-emu.de/images/newsbanner.png","https://www.aep-emu.de/",
);

function createBannerAd() {
    global $adList;

    $finalString = "<a";

    $adIndex = floor(mt_rand() % sizeof($adList) / 2) * 2;
    $adImg = $adList[$adIndex];
    $adLink = $adList[$adIndex+1];

    if(strlen($adLink)) $finalString .= ' href="' . $adLink . '"';

    $finalString .= '><img id="stupidBannerAd" width="468px" height="60px" src="' . $adImg . '"></a><br/>';

    return $finalString;
}

// restricted to /site/disclosure/all-ads
function printAllAds() {
    global $adList;
    
    for ($i = 0; $i < sizeof($adList); $i+=2) {
        $finalString = "<a";
        $adImg = $adList[$i];
        $adLink = $adList[$i+1];
        if(strlen($adLink)) $finalString .= ' href="' . $adLink . '"';
        $finalString .= '><img id="stupidBannerAd" loading="lazy" height="60px" src="' . $adImg . '"></a><br/>';
        echo $finalString;
    }
}

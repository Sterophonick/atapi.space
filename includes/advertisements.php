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
    "/assets/img/ads/gbax3.gif","https://web.archive.org/web/20050624022853/http://www.gbax.com/main.pl",
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
    "/assets/img/ads/treamcast2.gif","https://web.archive.org/web/20081216021113/http://www.gp2xstore.com/Treamcast_Console_p/052.htm?Click=21",
    "/assets/img/ads/xbox-chipz.gif","https://web.archive.org/web/20050220045421/http://www.xbox-chipz.co.uk/",
    "/assets/img/ads/maxmedia.gif","",
    "/assets/img/ads/sundisk.gif","https://web.archive.org/web/20080722201804/https://www.d2sun.com/",
    "/assets/img/ads/psjailbreak.gif","",
    "/assets/img/ads/pandora.gif","https://web.archive.org/web/20080828032422/http://www.openpandora.de/",
    "/assets/img/ads/retrobase.gif","https://web.archive.org/web/20050218030747/http://www.retrobase.net/",
    "/assets/img/ads/kmru.gif","",
    "/assets/img/ads/mame.gif","https://mamedev.org/",
    "/assets/img/ads/gbahome.jpg","https://web.archive.org/web/20031001071212/http://www.gbahome.com/main.asp", // unsure if this is actually the correct URL
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
    
    // Divineo Collection
    // Console modding hardware vendor from China
    "/assets/img/ads/divineo1.jpg","https://web.archive.org/web/20101106065123/http://www.divineo.com/cgi-bin/div-us/index.html",
    "/assets/img/ads/divineo2.jpg","https://web.archive.org/web/20101106065123/http://www.divineo.com/cgi-bin/div-us/index.html",
    "/assets/img/ads/divineo3.gif","https://web.archive.org/web/20101106065123/http://www.divineo.com/cgi-bin/div-us/index.html",
    "/assets/img/ads/divineo4.gif","https://web.archive.org/web/20101106065123/http://www.divineo.com/cgi-bin/div-us/index.html",
    "/assets/img/ads/divineo5.gif","https://web.archive.org/web/20101106065123/http://www.divineo.com/cgi-bin/div-us/index.html",
    "/assets/img/ads/divineo6.gif","https://web.archive.org/web/20101106065123/http://www.divineo.com/cgi-bin/div-us/index.html",
    "/assets/img/ads/divineo7.gif","https://web.archive.org/web/20101106065123/http://www.divineo.com/cgi-bin/div-us/index.html",
    "/assets/img/ads/divineo8.gif","https://web.archive.org/web/20101106065123/http://www.divineo.com/cgi-bin/div-us/index.html",
    "/assets/img/ads/divineo9.gif","https://web.archive.org/web/20101106065123/http://www.divineo.com/cgi-bin/div-us/index.html",
    
    "/assets/img/ads/hdfury.gif","https://web.archive.org/web/20110408082113/http://www.hdfury.com/",
    "/assets/img/ads/nokia.gif","https://web.archive.org/web/20150111073548/http://www.filibeto.org/mobile",
    "/assets/img/ads/sun.gif","https://web.archive.org/web/19990208010422/http://sun.com/",
    "/assets/img/ads/dvd.gif","https://boxy.neocities.org/shrek2dvd/main",
    "/assets/img/ads/tridek.gif","",
    
    // Lik-Sang Collection
    // Video games and third party console vendor
    // Also vendor of modchips and whatnot
    // Deleted in 2006 by Sony for... PSP reasons I think
    "/assets/img/ads/liksang.gif","https://web.archive.org/web/20040000000000*/lik-sang.com",
    "/assets/img/ads/liksang2.gif","https://web.archive.org/web/20040000000000*/lik-sang.com",
    "/assets/img/ads/liksang3.gif","https://web.archive.org/web/20040000000000*/lik-sang.com",
    "/assets/img/ads/liksang4.gif","https://web.archive.org/web/20040000000000*/lik-sang.com",
    "/assets/img/ads/liksang5.gif","https://web.archive.org/web/20040000000000*/lik-sang.com",
    "/assets/img/ads/liksang6.gif","https://web.archive.org/web/20060323024840/http://www.lik-sang.com/list.php?nav=top&category=315", // image taken from xbox360.dcemu.co.uk
    "/assets/img/ads/liksang7.gif","https://web.archive.org/web/20070000000000*/lik-sang.com",
    
    "/assets/img/ads/ps2.gif","https://pcsx2.net/",
    "/assets/img/ads/cd-r.gif","https://web.archive.org/web/20040618182818/http://reviews.cnet.com/2001-1_7-0.html",
    "/assets/img/ads/seti.gif","",
    "/assets/img/ads/windowsxp.gif","",
    "/assets/img/ads/garfield.gif","",
    "/assets/img/ads/playstation.gif","",
    "/assets/img/ads/n64.gif","https://ultra64.ca/files/documentation/online-manuals/man/pro-man/start/index.html",
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
    "/assets/img/ads/nochoice.gif","http://toastytech.com/evil/index.html", // the best anti-microsoft site i've ever seen
    "/assets/img/ads/consolefever.gif","https://web.archive.org/web/20050204195159/http://www.consolefever.com/customer/home.php",
    "/assets/img/ads/OCH.gif","https://web.archive.org/web/20020531003731/http://overclockers.com/",
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
    "/assets/img/ads/kbkids.jpeg","https://web.archive.org/web/20020213053150/http://www.kbtoys.com/vgames/indexGameBoyAdvance.html?ls=vgames",
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
    "/assets/img/ads/ie4.gif","https://www.firefox.com/en-US/",
    "/assets/img/ads/napsteralts.gif","",
    "/assets/img/ads/paying_too_much.gif","",
    "/assets/img/ads/unreal.gif","https://oldunreal.com/",
    "/assets/img/ads/via.gif","",
    "/assets/img/ads/maxpayne.gif","https://store.steampowered.com/app/12140/Max_Payne/",
    "/assets/img/ads/computermonkey.gif","",
    "/assets/img/ads/bizkit.gif","",
    "/assets/img/ads/macromedia.gif","https://ruffle.rs/",
    "/assets/img/ads/soundblaster.gif","",
    "/assets/img/ads/macg4.gif","",
    "/assets/img/ads/cybertown.gif","https://web.archive.org/web/19970618111815/http://www.cybertown.com/",
    "/assets/img/ads/geocities_japan.gif","https://web.archive.org/web/20050509010514im_/http://www.geocities.jp/js_source/filler_n.gif",
    "/assets/img/ads/dtv.gif","https://www.dtvanswers.com/", // image came from friend aquamarine
    "/assets/img/ads/skyline.gif","https://web.archive.org/web/19980524080104/http://www.farallon.com/product/fen/",
    "/assets/img/ads/dave-mac.gif","", //what exactly did this link to?
    "/assets/img/ads/webstar.gif","https://web.archive.org/web/19990417101044/http://www.reproduce.com/",
    "/assets/img/ads/piccolo-drive.gif","",
    "/assets/img/ads/quake.jpeg","https://store.steampowered.com/app/2310/Quake/",
    "/assets/img/ads/tucows.gif","https://web.archive.org/web/19961228134206/http://www.tucows.com/",
    "/assets/img/ads/connecsoft-email.gif","",
    "/assets/img/ads/bell-isdn.gif","https://web.archive.org/web/19981201204451/http://www.bell-atl.com/",
    "/assets/img/ads/compaq-vms.gif","https://web.archive.org/web/19990208005657/http://openvms.digital.com/openvms/72ship.html",
    "/assets/img/ads/roadrunner.gif","https://web.archive.org/web/20010806213847/http://mktg.roadrunner.com/rr/roadrunner/requestservice",
    "/assets/img/ads/powerbook.gif","",
    "/assets/img/ads/linuxban.gif","https://cachyos.org/",
    "/assets/img/ads/lilabanner.gif","https://web.archive.org/web/20010516210343/http://www.linuxlabs.com/",
    "/assets/img/ads/icewalkers.gif","https://web.archive.org/web/20010517002008/http://www.icewalkers.com/",
    "/assets/img/ads/win4lin.gif","https://web.archive.org/web/20010309112655/http://www.netraverse.com/", // literally a Windows virtual machine for Linux. what the fuck
    "/assets/img/ads/xmms.gif","https://web.archive.org/web/20020124061838im_/http://www.xmms.org/",
    "/assets/img/ads/xfce3.gif","https://web.archive.org/web/20011202172226im_/http://www.xfce.org/",
    "/assets/img/ads/turbolinux.gif","https://web.archive.org/web/20011203223913im_/http://www.turbolinux.com/",
    "/assets/img/ads/web-for-dummies.gif","https://web.archive.org/web/20011216094354im_/http://www.web-for-dummies.com/home.shtml",
    "/assets/img/ads/linuxapps.gif","https://web.archive.org/web/20010620222827/http://linuxapps.com/",
    "/assets/img/ads/tyra2.gif","https://web.archive.org/web/20000621044714/http://www.warpsite.de/",
    "/assets/img/ads/rewards1.jpg","https://web.archive.org/web/20120528004904/http://www.rewards1.com",
    "/assets/img/ads/richspsxparts.jpg","https://web.archive.org/web/20031026081604/http://www.richspsxparts.com/psxfo.html",
    "/assets/img/ads/psxbackupsman.gif","https://web.archive.org/web/20021012061633/http://cdrbackupman.maxleft.com/main2.htm",
    
    // the CustomPS2 colleciton
    // at some point this store changed their name to "ClearXbox" likely because of the Xbox 360
    "/assets/img/ads/customps2.gif","https://web.archive.org/web/20040828033542/http://www.customps2.com/xcart/customer/",
    "/assets/img/ads/customps2_2.gif","https://web.archive.org/web/20061103184040/http://www.customps2.com/site/",
    "/assets/img/ads/customps2_3.gif","https://web.archive.org/web/20061117031152/http://www.customps2.com/site/",
    "/assets/img/ads/customps2_4.gif","https://web.archive.org/web/20071011200617/http://www.clearxbox.com/site/",
    "/assets/img/ads/customps2_5.gif","https://web.archive.org/web/20071011200617/http://www.clearxbox.com/site/",
    "/assets/img/ads/customps2_6.gif","https://web.archive.org/web/20071011200617/http://www.clearxbox.com/site/",
    "/assets/img/ads/customps2_7.gif","https://web.archive.org/web/20071011200617/http://www.clearxbox.com/site/",
    
    "/assets/img/ads/modwhiz.gif","https://web.archive.org/web/20050817225536/http://www.modwhiz.com/store/catalog/",
    "/assets/img/ads/ps2-swap-magic.gif","",
    "/assets/img/ads/acegamestore.gif","https://web.archive.org/web/20060701045711/http://www.acegamestore.com/",
    "/assets/img/ads/ultimate-console-guides.gif","https://web.archive.org/web/20070226101907/http://www.ultimateconsoleguides.com/",
    "/assets/img/ads/xtreme-mods.gif","https://web.archive.org/web/20050303003621/http://www.extreme-mods.com/",
    "/assets/img/ads/gp2x-wiz.JPG","https://web.archive.org/web/20081207205830/http://gp2x.co.uk/",
    "/assets/img/ads/xrom512.gif","https://web.archive.org/web/20070712060028/http://www.easybuy2000.com/",
    "/assets/img/ads/xrom512_2.gif","https://web.archive.org/web/20070712060028/http://www.easybuy2000.com/",
    "/assets/img/ads/xrom512_3.gif","https://web.archive.org/web/20070712060028/http://www.easybuy2000.com/",
    "/assets/img/ads/xrom512_4.gif","https://web.archive.org/web/20070712060028/http://www.easybuy2000.com/",
    "/assets/img/ads/xrom512_5.gif","https://web.archive.org/web/20070712060028/http://www.easybuy2000.com/",
    "/assets/img/ads/xavbox.gif","https://web.archive.org/web/20071011014825/http://www.xavbox.info/",
    "/assets/img/ads/xbox-chameleon.gif","https://web.archive.org/web/20031012060028/http://www.easybuy2000.com/",
    "/assets/img/ads/planethardware.gif","https://web.archive.org/web/20010301212253/http://www.planethardware.com/",
    "/assets/img/ads/planetduke.gif","https://web.archive.org/web/20001109022200/http://planetduke.com/",
    "/assets/img/ads/planetduke2.gif","https://web.archive.org/web/20001109022200/http://planetduke.com/",
    "/assets/img/ads/hl-shift-interview.gif","https://web.archive.org/web/20010502195013/http://www.planethalflife.com/features/interviews/gearbox/randypitchford.shtm",
    "/assets/img/ads/planetquake.gif","https://web.archive.org/web/20001109022200/http://planetquake.com/",
    "/assets/img/ads/radiospy.gif","https://web.archive.org/web/20010301190122/http://www.radiospy.com/",
    "/assets/img/ads/3dap.gif","",
    "/assets/img/ads/planetxbox.gif","https://web.archive.org/web/20001018114813/http://planetxbox.com/",
    "/assets/img/ads/yepp.gif","https://web.archive.org/web/20010608071013/http://www.samsungyepp.com/",
    "/assets/img/ads/yepp2.gif","https://web.archive.org/web/20010608071013/http://www.samsungyepp.com/",
    "/assets/img/ads/voodooextreme.gif","https://web.archive.org/web/20010202070400/http://voodooextreme.com/",
    "/assets/img/ads/3dfx.gif","https://web.archive.org/web/20000620035237/http://www.3dfx.com/",
    "/assets/img/ads/3dfx2.gif","https://web.archive.org/web/20000620035237/http://www.3dfx.com/",
    "/assets/img/ads/3dfx3.gif","https://web.archive.org/web/20000620035237/http://www.3dfx.com/",
    "/assets/img/ads/machinima.gif","https://web.archive.org/web/20001110114300/http://www.machinima.com/", // this is the same machinima.com like that you saw on YouTube up until around 2017 or so. i miss them a lot
    "/assets/img/ads/ezattach.gif","https://web.archive.org/web/20000711012943/http://www.filepool.com/",
    "/assets/img/ads/gamecave.gif","https://web.archive.org/web/20000229031350if_/http://gamecave.com/default.asp",
    "/assets/img/ads/weenie.gif","", // what the fuck is a JavaScript Weenie?
    "/assets/img/ads/sharkyextreme.gif","https://web.archive.org/web/20030621044819/http://www1.sharkyextreme.com/",
    "/assets/img/ads/g3ti500.gif","", // some MSI board from 2001 or so. website needed.
    "/assets/img/ads/epox.gif","https://web.archive.org/web/20041001014744/http://www.epox.com/", // this ad was captured in 2003 so the link is wrong. but this is the more interesting one anyway
    "/assets/img/ads/abit.gif","https://web.archive.org/web/20031120175325/http://www.abit.com/", // redirects to motherboards.com. was there a real ABit site?
    "/assets/img/ads/azzo.gif","https://web.archive.org/web/20030603170818/http://www.azzo.com/AF4/default.asp", // https://web.archive.org/web/20030913215052/http://www.hardocp.com/images/banners/azzo/azzo-052902.gif
    "/assets/img/ads/via2.gif","",
    "/assets/img/ads/netscape-whole.gif","https://web.archive.org/web/19961223155132/http://www.netscape.com/comprod/mirror/client_download.html",
    "/assets/img/ads/office-mac.gif","",
    "/assets/img/ads/winNT_evil.gif","",
    "/assets/img/ads/vis_jpp.gif","",
    "/assets/img/ads/micrografx.gif","https://web.archive.org/web/20000619140515/http://www.micrografx.com/",
    "/assets/img/ads/macsurfshop.gif","",
    "/assets/img/ads/macseminars.gif","",
    "/assets/img/ads/director6.gif","",
    "/assets/img/ads/ipod.gif","",
    "/assets/img/ads/pac-mclan.gif","",
    "/assets/img/ads/superluigi.gif","https://web.archive.org/web/20090805202656/http://geocities.com/akaku43/SuperLuigi64.html",
    "/assets/img/ads/neoflash.gif","https://web.archive.org/web/20060220102805/http://neoflash.com/", // neoflash held coding competitions and shit
    "/assets/img/ads/neoflash-mk2.gif","https://web.archive.org/web/20060220102805/http://neoflash.com/".
    "/assets/img/ads/neoflash-3in1.gif","https://web.archive.org/web/20060220102805/http://neoflash.com/".
    "/assets/img/ads/neoflash-comp-2005.png","https://web.archive.org/web/20050220102805/http://neoflash.com/". // 768x99 but it's the same aspect ratio
    "/assets/img/ads/neoflash-comp-2006.png","https://web.archive.org/web/20060202133240/http://www.neoflash.com/forum/index.php/board,36.0.html".
    "/assets/img/ads/neoflash-summer-comp-2006.png","https://web.archive.org/web/20060613074714im_/http://www.neoflash.com/img/NEO-contest-2006-Spring-banner.jpg".
    "/assets/img/ads/al-gunban4.gif","https://web.archive.org/web/20030208035930/http://www.act-labs.com/", //pc light gun
    "/assets/img/ads/xarcade.gif","",
    "/assets/img/ads/free-romz-de.gif","https://web.archive.org/web/20050405031155/http://free-romz.de/",
    
    // Ads that originated from Adobe Flash SWFs
    // These are really cool and dynamic but really expensive when converting to gif
    "/assets/img/ads/xcm1.gif","https://web.archive.org/web/20070930230921/http://www.xcm.cc/", // http://www.ps3news.com/banners/xcm1.swf
    "/assets/img/ads/xcm2.gif","https://web.archive.org/web/20070930230921/http://www.xcm.cc/", // http://www.ps3news.com/banners/XCM.swf
    "/assets/img/ads/xcm3.gif","https://web.archive.org/web/20070930230921/http://www.xcm.cc/", // http://www.ps3news.com/banners/XCM_BM.swf
    "/assets/img/ads/xrom_swf1.gif","https://web.archive.org/web/20050712060028/http://www.easybuy2000.com/", // http://www.easybuy2000.com/banners/gba/XROM/5331/5331_468x60.swf
    "/assets/img/ads/xg-flash1.gif","https://web.archive.org/web/20030712060028/http://www.easybuy2000.com/", // http://www.easybuy2000.com/banners/gba/6079.swf
    "/assets/img/ads/ps3break.gif","https://web.archive.org/web/20110612182338/http://www.ps3usercheat.com/en/", // currently unknown source, i forgor
    
    // screw it, why don't we just advertise old demoparties now! :3
    "/assets/img/ads/breakpoint07.gif","https://web.archive.org/web/20070218142326/http://breakpoint.untergrund.net/",
    "/assets/img/ads/breakpoint10.gif","https://web.archive.org/web/20100307211623/http://breakpoint.untergrund.net/",
    "/assets/img/ads/assembly04.gif","https://web.archive.org/web/20040701110914/http://www.assembly.org/",

    // made by @hootwheelz@blahaj.zone
    "/assets/img/ads/sgi.gif","https://web.archive.org/web/20000511091920/http://www.sgi.com/",
    "/assets/img/ads/os2.gif","https://web.archive.org/web/20020206205124/http://www-3.ibm.com/software/os/warp/",
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
);

function createBannerAd() {
    global $adList;

    $finalString = "<a";

    $adIndex = floor(mt_rand() % sizeof($adList) / 2) * 2;
    $adImg = $adList[$adIndex];
    $adLink = $adList[$adIndex+1];

    if(strlen($adLink)) $finalString .= ' href="' . $adLink . '"';

    $finalString .= '><img id="stupidBannerAd" height="60px" src="' . $adImg . '"></a><br/>';

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

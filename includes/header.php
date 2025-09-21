<?php

$quoteStrings = array(
    // rebuild this later...
    "god forbid women do anything", "-- test",
);

$musicPaths = array(
    "AceMan - Different ways", "/assets/snd/music/different_ways.mp3",
    "falcon/pulse+tdr - spineless", "/assets/snd/music/spineless.mp3",
    "TheDuccinator - Some Creatures", "/assets/snd/music/some_creatures.mp3",
    "X-Ray - Mizzle", "/assets/snd/music/mizzle.mp3",
    "kfaraday - On the Road", "/assets/snd/music/on_the_road.mp3",
    "Nintendo - Main Theme (Nintendo Video)", "/assets/snd/music/nintendo_video.mp3",
    "Jogeir Liljedahl - addiction", "/assets/snd/music/addiction.mp3",
    "Robert Allen - Android", "/assets/snd/music/android.mp3",
    "hol - Castles in Limbo (Slushmouth)", "/assets/snd/music/castles_in_limbo.mp3",
    "Jay Tholen - Cave Drip", "/assets/snd/music/cave_drip.mp3",
    "Jay Tholen - Earth Our Home", "/assets/snd/music/earth_our_home.mp3",
    "Michiel van den Bos - Forgone Destruction", "/assets/snd/music/forgone.mp3",
    "Michiel van den Bos - Nether Animal", "/assets/snd/music/nether.mp3",
    "Toby Fox - Uwa!! SO HEATS!!", "/assets/snd/music/so_heats.mp3",
    "Jay Tholen - Dimensional Voyager", "/assets/snd/music/voyager.mp3",
    "Landon Podbielski - jazzroom", "/assets/snd/music/jazz_room.mp3",
    "kulor - Our Time Machine Works!", "/assets/snd/music/time_machine.mp3",
    "Nightmargin ft. Eliza Velasquez and Michael Shirt - On Little Cat Feet", "/assets/snd/music/OnLittleCatFeet.mp3",
);

?>

<div id="headerContainer">
    <header id="top">
        <div id="banner" class="window">
            <h1><img class="pfp" width="64px" src="/assets/img/global/royla_crown.png"> Atapi's Domain!</h1>
            <?php

            $quoteIndex = floor(mt_rand() % sizeof($quoteStrings) / 2) * 2;
            $quoteQuote = $quoteStrings[$quoteIndex];
            $quoteSource = $quoteStrings[$quoteIndex+1];
            //Math.floor(Math.random() * musicPaths.length / 2) * 2; // get even random number

            $quoteTag = '<span title="' . $quoteSource . "\">" . $quoteQuote . "</span>";

            echo $quoteTag;
            ?>
    </div>
    <table border="0" cellpadding="0" cellspacing="10px" width="1000px" align="center" id="pageNavbar">
        <tr>
            <td><a href="/site/"><img src="/assets/img/global/links.png"> Home</a></td>
            <td><a href="/site/projects/"><img src="/assets/img/global/folder.png"> Projects</a></td>
            <td><a href="/site/dumps/"><img src="/assets/img/global/chip.png"> Dumps</a></td>
            <td><a href="/site/blog/"><img src="/assets/img/global/folder.png"> Blog</a></td>
            <td><a href="/site/gallery/"><img src="/assets/img/global/gallery.png"> Gallery</a></td>
            <td><a href="/site/links/"><img src="/assets/img/global/links.png"> Links</a></td>
            <td><a href="/site/guestbook/"><img src="/assets/img/global/guestbook.png"> Say hi!</a></td>
        </tr>
    </table>
    <?php
    if(doWeShowMusicPlayer()){
        $musicIndex = floor(mt_rand() % sizeof($musicPaths) / 2) * 2;
        $musicName = $musicPaths[$musicIndex];
        $musicPath = $musicPaths[$musicIndex+1];
        //Math.floor(Math.random() * musicPaths.length / 2) * 2; // get even random number

        $musicPlayer = '<div id="headerMusicPlayer">';

        $musicPlayer .= '<p>♪♫ Now Playing: <marquee style="vertical-align: bottom;" speed="50%" width="10%">';

        $musicPlayer .= $musicName . "</marquee> ♪♫<br/>";

        $musicPlayer .=  "<audio style=\"height: 20px\" id=\"musicPlayer\" controls loop src=\"" . $musicPath . '"';

        $musicPlayer .= '></p></audio></div>';

        $musicPlayer .= "<script>var forceStopPlayer = false;</script>"; // this provides plumbing for pages to stop the music player if needed

        echo $musicPlayer;
    }

    if(doWeShowWarning()) {
        echo <<<EOF
            <p style="color:red">
                <img class="warnIcon" src="/assets/img/global/legacyWarning.gif">
                Your browser is out of date. Some things might not work quite right!
                <img class="warnIcon" src="/assets/img/global/legacyWarning.gif">
            </p>
        EOF;
    }

    ?>
    <div id="headerPartiton" style="margin-top: -15px">
        <img width="100%" height="6px" id="spacer" src="/assets/img/global/border.png">
    </div>

    <?php
        if(doWeShowOneko()) {
            echo '<script src="/scripts/oneko/oneko.js"></script>';
        }
    ?>

</div>

<?php

$customSideContent = <<<EOF
    <div class="sideFunFact window">
        <h4 style="text-align: center">Fun fact!</h4>
        <p>
            The vast majority of these ads were acquired by just, scouring the Wayback Machine, but many of them were also found through BannerDepot2000. Some were also made by myself, @Hootwheelz, and @7nonsense.
        </p>
    </div>
EOF;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Domain! :: Site & Privacy Info :: All Banner Ads");

?>

<h1>All Banner Ads</h1>
<p>Here's the complete list of all the banners ads that can show in the footer!</p><br/>

<?php

printAllAds();

?>

<?php

echo constructPageFooter();

?>

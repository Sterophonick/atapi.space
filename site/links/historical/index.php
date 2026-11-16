<?php

$customSideContent = <<<EOF
    <div class="sideFunFact window">
        <h4>Note:</h4>
        <p>
            Some sites are marked with a little <a skipcount href="https://ruffle.rs/"><img title="This site uses Macromedia Flash. Install Ruffle to view it!" class="headerIcon" src="/assets/img/links/flashicon.gif"></a> icon. These links require the use of Ruffle, which can be downloaded by clicking the icon.
        </p>
    </div>
EOF;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Domain! :: Links :: Historical");

include $_SERVER['DOCUMENT_ROOT'] . '/includes/linksCode.php';

printLinkData("historical");

?>


<?php

echo constructPageFooter();

?>

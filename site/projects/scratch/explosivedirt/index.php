<?php

$customSideContent = <<<EOF
    <div class="sideFunFact window">
        <h4>Fun fact!</h4>
        <p>
            This project was heavily inspired by the animations by WazzoTV, which 10+ years later still give me a chuckle.
        </p>
    </div>
EOF;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Domain! :: Projects :: Scratch :: Explosive Dirt");

?>

<h1><img style="vertical-align:middle" src="/assets/img/projects/scratch-icon.png"> Explosive Dirt</h1>

<?php generateScratchEmbed(25657469);?>

<br />
<a href="/files/Explosive Dirt.sb3">Scratch 3.0 SB3 Download</a><br />
<br />
<br />
<p>shoutouts to Scratch user @WazzoTV for screaming into his microphone a bunch</p>

<?php

echo constructPageFooter();

?>

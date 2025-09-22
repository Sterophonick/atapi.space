<?php

$customSideContent = <<<EOF
    <div class="sideFunFact window">
        <h4>Fun fact!</h4>
        <p>
            I took many more assets from WazzoTV for this one.
        </p>
    </div>
EOF;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Domain! :: Projects :: Scratch :: I NEED SOME TOAST!!");

?>

<h1><img style="vertical-align:middle" src="/assets/img/projects/scratch-icon.png"> I NEED SOME TOAST!!</h1>

<?php generateScratchEmbed(28887036);?>

<br />
<a href="/files/I NEED SOME TOAST!!.sb3">Scratch 3.0 SB3 Download</a><br />
<a href="/files/I NEED SOME TOAST!! (100114).sb3">October 1, 2014 Prototype (Broken in Scratch
3.0)</a><br />
<br />
<br />
<p>shoutouts to Scratch user @WazzoTV for screaming into his microphone a bunch</p>
<p>with apologies to John Williams for the usage of Duel of the Fates</p>

<?php

echo constructPageFooter();

?>

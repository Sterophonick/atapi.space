<?php

$navContents = <<<EOF
    <ul>
        <li><a>This is a nav item.</a></li>
        <li><a>This is another nav item.</a>
    </ul>
EOF;

$customSideContent = <<<EOF
    <div class="extraSidebar window">
        <h4 style="text-align: center">Custom Box 1</h4>
        You can put just about anything in here!
    </div>
    <div class="extraSidebar window">
        <h4 style="text-align: center">Custom Box 2</h4>
        It's really cool that I added this functionality
    </div>
EOF;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Domain!");

?>

<h1>This is a page header.</h1>
<p>It makes for good website posts, i think.</p>

<?php echo constructPageFooter(); ?>

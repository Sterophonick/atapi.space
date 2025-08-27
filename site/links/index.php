<?php

$jsonArray = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/assets/data/webLinks.json'), true);
$arrayNames = [];
$pageReq = $_GET['page'];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Domain! :: Web Links");

foreach($jsonArray as $arrName => $value) {
    $arrayNames[] = $arrName;
}

// print_r($arrayNames);

// This is what we do when we access the links page with no page variable.
if($pageReq == "")
{
    echo <<<EOF
        <div id="hypnospace-header">
        <img style="vertical-align:middle" src="/assets/img/links/skeleton-motorcycle.gif">
        <img style="vertical-align:middle" src="/assets/img/links/fire.gif">
        <img style="vertical-align:middle" src="/assets/img/links/skeleton-motorcycle.gif">
        </div>
        <br />
        <br />
        <table class="fixed" align="center" border="0" cellspacing="10" cellpadding="0"
        text-align: center;">
        <col width="320px" />
    EOF;

    print("<tr>");

    for($i = 0; $i < sizeof($arrayNames); $i++) {
        if(!($i % 2)) {
            print("</tr><tr>");
        }
        print($arrayNames[$i] . "<br/>");
    }

    print("</table>");

}

?>



<?php

echo constructPageFooter();

?>

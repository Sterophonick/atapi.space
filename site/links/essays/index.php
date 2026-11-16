<?php

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Domain! :: Links :: Essays");

include $_SERVER['DOCUMENT_ROOT'] . '/includes/linksCode.php';

printLinkData("essays");


?>


<?php

echo constructPageFooter();

?>

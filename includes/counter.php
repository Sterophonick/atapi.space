<?php
function hitCounter() {
    $counterHtml = '';

    $path = '/srv/counter.txt';

    // Opens countlog.txt to read the number of hits.
    $file  = fopen( $path, 'r' );

    // return if we could not properly open the file
    if($file == false) {
        return "";
    }

    $count = fgets( $file, 7 );
    fclose( $file );

    // Update the count.
    $count = strval( abs( intval( $count ) ) + 1 );

    // Opens countlog.txt to change new hit number.
    $file = fopen( $path, 'w' );
    fwrite( $file, $count );
    fclose( $file );

    // total of 7 digits -- we can alway add more later
    while (strlen($count) < 7) {
        $count = "0" . $count;
    }

    $chars = str_split($count);

    foreach ($chars as $digit) {
        $counterHtml .= '<img class="counterDigit" style="vertical-align: 4px;" src="/assets/img/hitcounter/digit-' . $digit . '.png">';
    }

    // print the funny
    return $counterHtml;
}
?>

<?php

function hitCounter() {
    // Data abstracted from that JSON of known bots and crawlers. We fuzzy select them
    $bots = ['bot', 'crawl', 'spider', 'slurp', 'curl', 'python', 'convera', "facebookexternalhit", "meta-", 'mastodon', 'akkoma', 'misskey', 'sindresorhus', 'discord' ];
    $userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);

    $doNotIncrement = 0;

    //echo $userAgent;

    foreach ($bots as $bot) {
        if (str_contains($userAgent, $bot)) {
            $doNotIncrement = 1;
        }
    }

    $counterHtml = '';

    $path = '/srv/counter.txt';

    // Opens countlog.txt to read the number of hits.
    $file  = fopen( $path, 'r' );

    if(flock($file, LOCK_EX)) {

        // return if we could not properly open the file
        if($file == false) {
            return "";
        }

        $count = fgets($file);

        // Update the count.
        if(!($doNotIncrement)) { $count++; }

        fwrite( $file, $count );
        fflush( $file);
        flock($file, LOCK_UN);
    }
    fclose($file);

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

// echo hitCounter();
?>

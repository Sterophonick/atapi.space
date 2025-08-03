<?php

function hitCounter() {
    // Data abstracted from that JSON of known bots and crawlers. We fuzzy select them
    $bots = ['bot', 'crawl', 'spider', 'slurp', 'curl', 'python', 'convera', "facebookexternalhit", "meta-", 'mastodon', 'akkoma', 'misskey', 'sindresorhus', 'discord', 'pleroma', 'rss' ];
    $userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);

    $doNotIncrement = 0;
    $trackUserAgents = 1;

    //echo $userAgent;

    foreach ($bots as $bot) {
        if (str_contains($userAgent, $bot)) {
            $doNotIncrement = 1;
        }
    }

    $counterHtml = '';

    $path = '/srv/counter.txt';
    $pathToUALog = '/srv/useragents.txt'; // temporary thing, i just have this for tracking what user agents tick up the counter

    // Opens countlog.txt to read the number of hits.
    $file  = fopen( $path, 'r+w' );

    if($trackUserAgents) $fileUA  = fopen( $path, 'r+w' );

    if(flock($file, LOCK_EX)) {

        // return if we could not properly open the file
        if($file == false) {
            return "";
        }

        $count = fgets($file, 100);

        // Update the count.
        if(!($doNotIncrement)) {
            $count++;
            if($trackUserAgents) {
                if(flock($fileUA, LOCK_EX)) {
                    file_put_contents($fileUA, $_SERVER['HTTP_USER_AGENT'] . PHP_EOL, FILE_APPEND);

                    rewind($filUA);
                    fputs( $fileUA, $count );
                    fflush( $fileUA);
                    flock($fileUA, LOCK_UN);
                }
                fclose($fileUA);
            }
        }

        rewind($file);
        fputs( $file, $count );
        fflush( $file);
        flock($file, LOCK_UN);
    }
    fclose($file);

    $count = strval($count);

    // total of 7 digits -- we can alway add more later
    while (strlen($count) < 7) {
        $count = "0" . $count;
    }

    $chars = str_split($count);

    foreach ($chars as $digit) {
        $counterHtml .= '<img class="counterDigit" style="vertical-align: 4px;" src="/assets/img/digits/digit-' . $digit . '.png">';
    }

    // print the funny
    return $counterHtml;
}

// echo hitCounter();
?>

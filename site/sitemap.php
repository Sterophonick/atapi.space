<?php

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Homepage! :: Sitemap");

?>

<h1>Site Map</h1>
<p>Here's the complete list of all pages on the site!<p>
<p style="text-align: left">
<?php

function listIndexPhpFiles($directory) {
    $indexFiles = [];

    // Check if the directory exists
    if (!is_dir($directory)) {
        echo "Directory does not exist.";
        return [];
    }

    // Create a RecursiveDirectoryIterator
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory));

    // Loop through all files in the directory and subdirectories
    foreach ($iterator as $file) {
        // Check if the current file is an index.php file
        if (str_contains($file->getFilename(), '.php')) {


            if(str_contains($file->getFilename(), 'index.php')) {
                // Store the full path of the file

                $indexFiles[] = str_replace($directory, '', rtrim($file->getRealPath(), "index.php"));
            } else  {
                $indexFiles[] = str_replace($directory, '', $file->getRealPath());
            }
        }

        if (str_contains($file->getFilename(), '.html')) {

            if(str_contains($file->getFilename(), 'index.html')) {
                // Store the full path of the file
                $indexFiles[] = str_replace($directory, '', trim($file->getRealPath(), "index.html"));
            } else  {
                $indexFiles[] = str_replace($directory, '', $file->getRealPath());
            }
        }
    }

    // Return the list of index.php files
    return $indexFiles;
}

$indexPhpFiles = listIndexPhpFiles($_SERVER['DOCUMENT_ROOT']);

// Remove utils
$removePhp = array_search('/includes/header.php', $indexPhpFiles);
unset($indexPhpFiles[$removePhp]);
$removePhp = array_search('/includes/util.php', $indexPhpFiles);
unset($indexPhpFiles[$removePhp]);

foreach($indexPhpFiles as $file) {
    echo '<a href="' . $file . '">' . $file . '</a><br/>';
}



?>
<a href="/files/">/files/</a><br/>
</p>

<?php

echo constructPageFooter();

?>

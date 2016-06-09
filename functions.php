<?php

/*
 * Get list of CSVs
 */
$scanned_directory = glob('files_to_merge/*.csv');
foreach ($scanned_directory as $key => $value) {
    echo "- ".substr($scanned_directory[$key], 15)."<br>";
    $file = fopen($scanned_directory[$key], "r");
    while (! feof($file)) {
        print_r(fgetcsv($file, 1))."<br>";
    }
    fclose($file);
}

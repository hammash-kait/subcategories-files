<?php
// The directory containing the files
$directory = 'files';

// Get all files in the directory
$files = scandir($directory);

// Loop through each file
foreach ($files as $file) {

    // Check if it's not a file
    if (!is_file($directory . '/' . $file)) {
        continue;
    }

    // Get the prefix
    $prefix = substr($file, 0, strpos($file, '-'));

    // Create the sub-directory path
    $subdir = $directory . '/' . $prefix;

    // Check if the sub-directory exists
    if (!is_dir($subdir)) {
        // Create the sub-directory
        mkdir($subdir);
    }

    // Move the file to the sub-directory
    rename($directory . '/' . $file, $subdir . '/' . $file);
}
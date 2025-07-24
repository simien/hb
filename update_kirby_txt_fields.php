<?php
// update_kirby_txt_fields.php
// Recursively update all .txt files in content/ to ensure Status, Template, and Title fields exist at the top

$baseDir = __DIR__ . '/content';

function getTitleFromPath($filePath) {
    $parts = explode(DIRECTORY_SEPARATOR, $filePath);
    $file = array_pop($parts);
    $folder = array_pop($parts);
    if ($folder && $folder !== 'content') {
        return preg_replace('/^\d+-/', '', $folder); // Remove numeric prefix
    }
    return preg_replace('/\.txt$/', '', $file);
}

function processTxtFile($filePath) {
    $content = file_get_contents($filePath);
    $fields = [
        'Status' => 'listed',
        'Template' => 'default',
        'Title' => getTitleFromPath($filePath),
    ];

    // Find which fields are missing
    $missing = [];
    foreach ($fields as $key => $value) {
        if (!preg_match('/^' . preg_quote($key, '/') . ':/mi', $content)) {
            $missing[$key] = $value;
        }
    }
    if (empty($missing)) return; // Nothing to do

    // Build new header
    $header = '';
    foreach ($fields as $key => $value) {
        if (isset($missing[$key])) {
            $header .= "$key: $value\n----\n";
        }
    }
    // Insert at the top
    $newContent = $header . $content;
    file_put_contents($filePath, $newContent);
    echo "Updated: $filePath\n";
}

function scanDirRecursive($dir) {
    $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
    foreach ($rii as $file) {
        if ($file->isDir()) continue;
        if (strtolower($file->getExtension()) === 'txt') {
            processTxtFile($file->getPathname());
        }
    }
}

scanDirRecursive($baseDir);
echo "Done.\n"; 
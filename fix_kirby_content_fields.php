<?php
// fix_kirby_content_fields.php
// Recursively adds missing 'Status: listed' and 'Template: [TEMPLATE]' fields to .txt files in 'content/' (Kirby 4 compatible)

$base = __DIR__ . '/content';
$modified = [];

function fix_fields_in_file($file, $relpath) {
    global $modified;
    $content = file_get_contents($file);
    $has_status = preg_match('/^Status:\s*listed/im', $content);
    $has_template = preg_match('/^Template:\s*\S+/im', $content);
    $to_add = [];
    if (!$has_status) $to_add[] = 'Status: listed';
    if (!$has_template) $to_add[] = 'Template: [TEMPLATE]';
    if (!empty($to_add)) {
        // Insert missing fields at the top, before any other content
        $new_content = implode("\n", $to_add) . "\n" . $content;
        file_put_contents($file, $new_content);
        $modified[] = "$relpath (added: " . implode(', ', $to_add) . ")";
    }
}

function fix_folder($path, $rel = '') {
    foreach (scandir($path) as $item) {
        if ($item === '.' || $item === '..') continue;
        $full = "$path/$item";
        $relpath = "$rel$item";
        if (is_dir($full)) {
            fix_folder($full, "$rel$item/");
        } elseif (is_file($full) && preg_match('/\.txt$/i', $item)) {
            fix_fields_in_file($full, $relpath);
        }
    }
}

fix_folder($base);

if (empty($modified)) {
    echo "No files needed fixing.\n";
} else {
    echo "Kirby Content Field Fix Report:\n";
    foreach ($modified as $mod) {
        echo "$mod\n";
    }
} 
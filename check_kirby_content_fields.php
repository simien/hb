<?php
// check_kirby_content_fields.php
// Recursively checks all .txt files in 'content/' for missing 'Status: listed' or 'Template:' fields (Kirby 4 compatible)

$base = __DIR__ . '/content';
$errors = [];

function check_fields_in_file($file, $relpath) {
    global $errors;
    $content = file_get_contents($file);
    $has_status = preg_match('/^Status:\s*listed/im', $content);
    $has_template = preg_match('/^Template:\s*\S+/im', $content);
    if (!$has_status || !$has_template) {
        $missing = [];
        if (!$has_status) $missing[] = 'Status: listed';
        if (!$has_template) $missing[] = 'Template:';
        $errors[] = "[MISSING] $relpath (" . implode(', ', $missing) . ")";
    }
}

function check_folder($path, $rel = '') {
    foreach (scandir($path) as $item) {
        if ($item === '.' || $item === '..') continue;
        $full = "$path/$item";
        $relpath = "$rel$item";
        if (is_dir($full)) {
            check_folder($full, "$rel$item/");
        } elseif (is_file($full) && preg_match('/\.txt$/i', $item)) {
            check_fields_in_file($full, $relpath);
        }
    }
}

check_folder($base);

if (empty($errors)) {
    echo "All .txt files have both 'Status: listed' and 'Template:' fields.\n";
} else {
    echo "Kirby Content Field Check Report:\n";
    foreach ($errors as $err) {
        echo "$err\n";
    }
} 
<?php
// check_kirby_content_files.php
// Recursively checks all subfolders in 'content/' for missing or misnamed .txt files (Kirby 4 compatible)

$base = __DIR__ . '/content';
$errors = [];

function slug_from_folder($folder) {
    // Remove numeric prefix and dash, e.g. '1-pratt-st' => 'pratt-st'
    return preg_replace('/^\d+-/', '', $folder);
}

function check_folder($path, $rel = '') {
    global $errors;
    $dir = basename($path);
    if ($dir === '.' || $dir === '..') return;
    if (!is_dir($path)) return;
    $slug = slug_from_folder($dir);
    $txts = glob($path . '/*.txt');
    if (empty($txts)) {
        $errors[] = "[MISSING] $rel$dir (no .txt file)";
    } else {
        $has_expected = false;
        foreach ($txts as $txt) {
            $file = basename($txt);
            $file_slug = preg_replace('/\..*$/', '', $file);
            if ($file_slug === $slug || $file_slug === 'default' || $file_slug === 'site') {
                $has_expected = true;
            }
        }
        if (!$has_expected) {
            $errors[] = "[MISNAMED] $rel$dir (found: " . implode(', ', array_map('basename', $txts)) . ")";
        }
    }
    // Recurse into subfolders
    foreach (scandir($path) as $sub) {
        if ($sub === '.' || $sub === '..') continue;
        $subpath = "$path/$sub";
        if (is_dir($subpath)) {
            check_folder($subpath, "$rel$dir/");
        }
    }
}

check_folder($base);

if (empty($errors)) {
    echo "All folders have correctly named .txt files.\n";
} else {
    echo "Kirby Content File Check Report:\n";
    foreach ($errors as $err) {
        echo "$err\n";
    }
} 
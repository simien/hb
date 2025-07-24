<?php
// Kirby 4 Content Structure Audit Script
// Author: Simien Antonis-Parr (https://simienap.com)
// With support from Cursor
// Recursively checks all subfolders in 'content/' for missing .txt files and valid templates.
//
// Usage: php check_kirby_content_files.php
//
// Best Practices (see https://getkirby.com/docs/guide/content/text-files):
// - Each page or subpage folder should contain at least one .txt file (except image .txt files).
// - The Template: field inside each .txt file must match a file in site/templates/ (e.g., Template: article => site/templates/article.php).
// - The .txt filename does NOT need to match the Template: field (Kirby does not require this).
// - Blog posts and subpages must be in their own folders, not as flat .txt files.
// - Parent pages (e.g., locations, blog) must have a .txt file (e.g., locations.txt, blog.txt).
// - Do not add required fields to image .txt files (e.g., .jpg.txt, .png.txt, .gif.txt, .webp.txt).
// - Folder and file names are case-sensitive and must match slugs and template names.
// - This script is read-only and does not modify any files.

$base = __DIR__ . '/content';
$templates_dir = __DIR__ . '/site/templates';
$errors = [];

function is_image_txt($filename) {
    return preg_match('/\.(jpg|jpeg|png|gif|webp)\.txt$/i', $filename);
}

function slug_from_folder($folder) {
    // Remove numeric prefix and dash, e.g. '1-example-location' => 'example-location'
    return preg_replace('/^\d+-/', '', $folder);
}

function get_template_from_file($file) {
    $content = file_get_contents($file);
    if (preg_match('/^Template:\s*(\S+)/im', $content, $matches)) {
        return strtolower(trim($matches[1]));
    }
    return null;
}

function template_exists($template) {
    global $templates_dir;
    return file_exists($templates_dir . "/$template.php");
}

function check_folder($path, $rel = '') {
    global $errors;
    $dir = basename($path);
    if ($dir === '.' || $dir === '..') return;
    if (!is_dir($path)) return;
    $slug = slug_from_folder($dir);
    $txts = array_filter(glob($path . '/*.txt'), function($f) { return !is_image_txt($f); });
    if (empty($txts)) {
        $errors[] = "[MISSING] $rel$dir (no .txt file)";
    } else {
        foreach ($txts as $txt) {
            $file = basename($txt);
            $template = get_template_from_file($txt);
            // Check that Template: matches a real template file
            if ($template && !template_exists($template)) {
                $errors[] = "[INVALID TEMPLATE] $rel$dir/$file (Template: $template.php not found in site/templates/)";
            }
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
    echo "All folders have at least one .txt file (excluding image .txt files) and all templates are valid.\n";
} else {
    echo "Kirby Content File Check Report:\n";
    foreach ($errors as $err) {
        echo "$err\n";
    }
} 
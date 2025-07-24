<?php
// Kirby 4 Content Field Audit Script
// Author: Simien Antonis-Parr (https://simienap.com)
// With support from Cursor
// Recursively checks all .txt files in 'content/' for required fields, structure, and valid templates.
//
// Usage: php check_kirby_content_fields.php
//
// Best Practices (see https://getkirby.com/docs/guide/content/text-files):
// - Each .txt file (except image .txt files) must start with Status, Template, Title fields (any order).
// - Use '----' as a field separator after required fields.
// - If a .txt file is named default.txt, its Template: field must be 'default' and site/templates/default.php must exist.
// - Do not strip or overwrite original fields during migration.
// - Template must match a file in site/templates/.
// - Blog posts/subpages must be in their own folders, with .txt file named after the template.
// - Do not modify image .txt files (e.g., .jpg.txt, .png.txt, .gif.txt, .webp.txt).
// - Folder/file names are case-sensitive.
// - Clear site/cache/ and media/ after content changes.

$base = __DIR__ . '/content';
$templates_dir = __DIR__ . '/site/templates';
$errors = [];

function is_image_txt($filename) {
    return preg_match('/\.(jpg|jpeg|png|gif|webp)\.txt$/i', $filename);
}

function template_exists($template) {
    global $templates_dir;
    return file_exists($templates_dir . "/$template.php");
}

function check_fields_in_file($file, $relpath) {
    global $errors;
    if (is_image_txt($file)) return; // Skip image .txt files
    $content = file_get_contents($file);
    // Check for extra whitespace before first field
    if (preg_match('/^\s+/', $content)) {
        $errors[] = "[WHITESPACE] $relpath (extra whitespace before first field)";
    }
    $has_status = preg_match('/^Status:\s*\S+/im', $content);
    $has_template = preg_match('/^Template:\s*(\S+)/im', $content, $template_match);
    $has_title = preg_match('/^Title:\s*\S+/im', $content);
    $has_separator = preg_match('/^----$/m', $content);
    if (!$has_status || !$has_template || !$has_title || !$has_separator) {
        $missing = [];
        if (!$has_status) $missing[] = 'Status:';
        if (!$has_template) $missing[] = 'Template:';
        if (!$has_title) $missing[] = 'Title:';
        if (!$has_separator) $missing[] = "'----' separator";
        $errors[] = "[MISSING] $relpath (" . implode(', ', $missing) . ")";
    }
    // Check that Template: matches a real template file
    if ($has_template) {
        $template = strtolower(trim($template_match[1]));
        if (!template_exists($template)) {
            $errors[] = "[INVALID TEMPLATE] $relpath (Template: $template.php not found in site/templates/)";
        }
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
    echo "All .txt files (except image .txt files) have required fields, structure, and valid templates.\n";
} else {
    echo "Kirby Content Field Check Report:\n";
    foreach ($errors as $err) {
        echo "$err\n";
    }
} 
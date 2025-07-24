<?php
// replace_kirby_template_placeholders.php
// Recursively replaces 'Template: [TEMPLATE]' with the correct template name in .txt files in 'content/'

$base = __DIR__ . '/content';
$modified = [];

function infer_template_name($filename) {
    $lower = strtolower($filename);
    if ($lower === 'site.txt') return 'site';
    if ($lower === 'default.txt') return 'default';
    if (preg_match('/\.(jpg|jpeg|png|gif|svg|ico)\.txt$/i', $lower)) return 'file';
    return preg_replace('/\.txt$/i', '', $filename);
}

function replace_template_placeholder($file, $relpath) {
    global $modified;
    $content = file_get_contents($file);
    if (strpos($content, 'Template: [TEMPLATE]') === false) return;
    $template = infer_template_name(basename($file));
    $new_content = preg_replace('/Template: \[TEMPLATE\]/', 'Template: ' . $template, $content, 1);
    file_put_contents($file, $new_content);
    $modified[] = "$relpath (Template: $template)";
}

function process_folder($path, $rel = '') {
    foreach (scandir($path) as $item) {
        if ($item === '.' || $item === '..') continue;
        $full = "$path/$item";
        $relpath = "$rel$item";
        if (is_dir($full)) {
            process_folder($full, "$rel$item/");
        } elseif (is_file($full) && preg_match('/\.txt$/i', $item)) {
            replace_template_placeholder($full, $relpath);
        }
    }
}

process_folder($base);

if (empty($modified)) {
    echo "No files needed template replacement.\n";
} else {
    echo "Kirby Template Placeholder Replacement Report:\n";
    foreach ($modified as $mod) {
        echo "$mod\n";
    }
} 
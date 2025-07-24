<?php
// merge_kirby_content.php
// Merges original Kirby content from backup into current content/ directory, preserving all fields and enforcing Kirby 4 requirements. Now includes image .txt files, alt text, and logging.

$originalRoot = '/Users/sap/Dropbox/Projects/HomeBase2025/hb-master-textonly/content';
$targetRoot   = __DIR__ . '/content';
$logFile      = __DIR__ . '/merge_kirby_content.log';

// Required Kirby 4 fields
function requiredFields($template, $title) {
    return [
        'Status'   => 'listed',
        'Template' => $template,
        'Title'    => $title,
    ];
}

// Helper: Is this an image .txt file?
function isImageTxt($filename) {
    return preg_match('/\.(jpg|jpeg|png|gif|webp|svg)\.txt$/i', $filename);
}

// Helper: Parse Kirby .txt file into associative array (field => value)
function parseKirbyTxt($filepath) {
    $fields = [];
    if (!file_exists($filepath)) return $fields;
    $lines = file($filepath, FILE_IGNORE_NEW_LINES);
    $currentField = null;
    $currentValue = [];
    foreach ($lines as $line) {
        if (preg_match('/^([A-Za-z0-9_\-]+):\s*(.*)$/', $line, $m)) {
            if ($currentField !== null) {
                $fields[$currentField] = trim(implode("\n", $currentValue));
            }
            $currentField = $m[1];
            $currentValue = [$m[2]];
        } elseif (trim($line) === '----') {
            continue;
        } elseif ($currentField !== null) {
            $currentValue[] = $line;
        }
    }
    if ($currentField !== null) {
        $fields[$currentField] = trim(implode("\n", $currentValue));
    }
    return $fields;
}

// Helper: Write Kirby .txt file from associative array (fields in order)
function writeKirbyTxt($filepath, $fields) {
    $out = [];
    foreach ($fields as $key => $value) {
        $out[] = "$key: $value";
        $out[] = '----';
    }
    file_put_contents($filepath, implode("\n", $out));
}

// Logging helper
function logAction($message, $logFile) {
    echo $message . "\n";
    file_put_contents($logFile, $message . "\n", FILE_APPEND);
}

// Recursively merge content
function mergeContent($srcDir, $dstDir, $logFile) {
    $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($srcDir));
    foreach ($rii as $file) {
        if ($file->isDir()) continue;
        $relPath = substr($file->getPathname(), strlen($srcDir) + 1);
        if (strtolower(substr($file->getFilename(), -4)) !== '.txt') continue;

        $srcFile = $file->getPathname();
        $dstFile = $dstDir . '/' . $relPath;
        if (!file_exists(dirname($dstFile))) {
            mkdir(dirname($dstFile), 0777, true);
        }

        $origFields = parseKirbyTxt($srcFile);
        $dstFields  = file_exists($dstFile) ? parseKirbyTxt($dstFile) : [];

        $isImage = isImageTxt($relPath);
        $logDetails = [];
        $addedFields = [];
        $addedAlt = false;

        // Determine template and title
        if ($isImage) {
            $template = $dstFields['Template'] ?? $origFields['Template'] ?? 'image';
            $title    = $dstFields['Title'] ?? $origFields['Title'] ?? 'Image: ' . basename($dstFile, '.txt');
        } else {
            $template = $dstFields['Template'] ?? $origFields['Template'] ?? 'default';
            $title    = $dstFields['Title'] ?? $origFields['Title'] ?? (basename($dstFile, '.txt'));
        }

        // Merge: required fields at top, then all original fields (no overwrite)
        $merged = requiredFields($template, $title);
        foreach ($merged as $k => $v) {
            if (!isset($origFields[$k]) && !isset($dstFields[$k])) {
                $addedFields[] = $k;
            }
        }
        foreach ($origFields as $k => $v) {
            if (!isset($merged[$k])) {
                $merged[$k] = $v;
            }
        }
        foreach ($dstFields as $k => $v) {
            if (!isset($merged[$k])) {
                $merged[$k] = $v;
            }
        }

        // For image .txt files, ensure alt field exists
        if ($isImage) {
            if (!isset($merged['alt']) || trim($merged['alt']) === '') {
                $merged['alt'] = 'Image: ' . ($title ?: basename($dstFile, '.txt'));
                $addedAlt = true;
            }
        }

        writeKirbyTxt($dstFile, $merged);
        $logMsg = "Merged: $relPath";
        if ($isImage) {
            $logMsg .= " [image .txt]";
        }
        if (!empty($addedFields)) {
            $logMsg .= " | Added fields: " . implode(", ", $addedFields);
        }
        if ($addedAlt) {
            $logMsg .= " | Added alt field";
        }
        logAction($logMsg, $logFile);
    }
}

// Clear previous log
file_put_contents($logFile, "Migration started at " . date('Y-m-d H:i:s') . "\n");

mergeContent($originalRoot, $targetRoot, $logFile);
logAction("\nAll content merged. Review your site and commit changes.", $logFile); 
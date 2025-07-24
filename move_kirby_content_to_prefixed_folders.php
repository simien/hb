<?php
// move_kirby_content_to_prefixed_folders.php
// Moves all subfolders/files (except parent .txt) from non-prefixed to prefixed Kirby content folders, then deletes the empty non-prefixed folder.

$map = [
  'locations' => '1-locations',
  'blog' => '2-blog',
  'events' => '3-events',
  'info' => '4-info',
];

$base = __DIR__ . '/content';
$moved = [];
$skipped = [];
$deleted = [];
$errors = [];

function rrmdir($dir) {
  if (!is_dir($dir)) return;
  $objects = scandir($dir);
  foreach ($objects as $object) {
    if ($object == "." || $object == "..") continue;
    $path = "$dir/$object";
    if (is_dir($path)) rrmdir($path);
    else unlink($path);
  }
  rmdir($dir);
}

foreach ($map as $src => $dst) {
  $srcPath = "$base/$src";
  $dstPath = "$base/$dst";
  if (!is_dir($srcPath)) continue;
  if (!is_dir($dstPath)) {
    $errors[] = "Destination folder missing: $dstPath";
    continue;
  }
  $items = scandir($srcPath);
  foreach ($items as $item) {
    if ($item === '.' || $item === '..') continue;
    // Skip the parent .txt file (e.g., locations.txt)
    if ($item === "$src.txt") continue;
    $srcItem = "$srcPath/$item";
    $dstItem = "$dstPath/$item";
    if (file_exists($dstItem)) {
      $skipped[] = "$dst/$item (already exists, skipped)";
      continue;
    }
    if (!rename($srcItem, $dstItem)) {
      $errors[] = "Failed to move $srcItem to $dstItem";
    } else {
      $moved[] = "$src/$item -> $dst/$item";
    }
  }
  // After moving, check if src folder is empty (except for . and .. and parent .txt)
  $left = array_diff(scandir($srcPath), ['.', '..', "$src.txt"]);
  if (empty($left)) {
    rrmdir($srcPath);
    $deleted[] = $src;
  }
}

echo "Move Report:\n";
foreach ($moved as $line) echo "Moved: $line\n";
foreach ($skipped as $line) echo "Skipped: $line\n";
foreach ($deleted as $line) echo "Deleted: $line\n";
foreach ($errors as $line) echo "Error: $line\n";
if (empty($moved) && empty($skipped) && empty($deleted) && empty($errors)) echo "Nothing to do.\n"; 
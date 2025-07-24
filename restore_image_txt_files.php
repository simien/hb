<?php
// restore_image_txt_files.php
// Restores image .txt files in content/ from the original Kirby 2 build (read-only source)

$restoreList = [
    'content/home/homebase-eventbase-15.jpg.txt',
    'content/home/hb-prattst-400-00004.jpg.txt',
    'content/home/hb-prattst-400-00002.jpg.txt',
    'content/home/hb-prattst-400-00003.jpg.txt',
    'content/home/homebase-eventbase-3.jpg.txt',
    'content/home/files/favicon.ico.txt',
    'content/home/files/cover.png.txt',
    'content/home/hb-prattst-400-00001.jpg.txt',
    'content/home/homebase-eventbase-8.jpg.txt',
    'content/1-locations/2-clipper-mill/plans/hb-prattst-floorplan.png.txt',
    'content/1-locations/2-clipper-mill/homebaseworks-clippermill-00015.jpg.txt',
    'content/1-locations/2-clipper-mill/homebaseworks-clippermill-00011.jpg.txt',
    'content/1-locations/2-clipper-mill/homebaseworks-clippermill-00002.jpg.txt',
    'content/1-locations/1-pratt-st/hb-prattst-400-00004.jpg.txt',
    'content/1-locations/1-pratt-st/plans/hb-prattst-floorplan.png.txt',
    'content/1-locations/1-pratt-st/hb-prattst-400-00002.jpg.txt',
    'content/1-locations/1-pratt-st/hb-prattst-400-00003.jpg.txt',
    'content/1-locations/1-pratt-st/hb-prattst-400-00001.jpg.txt',
];

$sourceBase = '/Users/sap/Dropbox/Projects/HomeBase2025/hbkirby/';
$targetBase = __DIR__ . '/';

foreach ($restoreList as $relPath) {
    $src = $sourceBase . $relPath;
    $dst = $targetBase . $relPath;
    if (!file_exists($src)) {
        echo "WARNING: Source file missing: $src\n";
        continue;
    }
    if (!file_exists($dst)) {
        echo "WARNING: Target file missing: $dst\n";
        continue;
    }
    if (!is_readable($src) || !is_writable($dst)) {
        echo "WARNING: Permission issue for $src or $dst\n";
        continue;
    }
    $data = file_get_contents($src);
    file_put_contents($dst, $data);
    echo "Restored: $dst\n";
}
echo "Done.\n"; 
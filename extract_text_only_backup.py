import os
import shutil
import argparse
import logging

# Default source and destination directories
DEFAULT_SRC = '/Users/sap/Dropbox/Projects/HomeBase2025/hb-master'
DEFAULT_DST = '/Users/sap/Dropbox/Projects/HomeBase2025/hb-master-textonly'

# File extension sets
TEXT_EXTS = {'.txt', '.md', '.php', '.js', '.css', '.yml', '.yaml', '.json', '.html', '.htm', '.xml', '.ini', '.env', '.gitignore', '.csv', '.ts', '.scss', '.less'}
MEDIA_EXTS = {'.jpg', '.jpeg', '.png', '.gif', '.svg', '.ico', '.webp', '.mp4', '.mov', '.avi', '.mp3', '.wav', '.pdf', '.eps', '.tif', '.tiff', '.bmp', '.psd', '.ai', '.otf', '.ttf', '.woff', '.woff2', '.eot'}
EXCLUDE_DIRS = {'.git', 'node_modules', 'vendor', '__pycache__'}
LARGE_TEXT_SIZE = 5 * 1024 * 1024  # 5MB
LOG_FILE = 'extract_text_only_backup.log'

# Set up logging
logging.basicConfig(filename=LOG_FILE, level=logging.INFO, format='%(asctime)s %(levelname)s: %(message)s')

# Argument parser
parser = argparse.ArgumentParser(description='Extract text-only backup of a directory, with media placeholders.')
parser.add_argument('--src', default=DEFAULT_SRC, help='Source directory')
parser.add_argument('--dst', default=DEFAULT_DST, help='Destination directory')
parser.add_argument('--dry-run', action='store_true', help='Preview actions without making changes')
args = parser.parse_args()
SRC = args.src
DST = args.dst
DRY_RUN = args.dry_run

def is_text_file(filename):
    ext = os.path.splitext(filename)[1].lower()
    return ext in TEXT_EXTS

def is_media_file(filename):
    ext = os.path.splitext(filename)[1].lower()
    return ext in MEDIA_EXTS

def should_exclude_dir(dirname):
    return dirname in EXCLUDE_DIRS

# Remove the destination directory if it exists, then recreate it (unless dry run)
if os.path.exists(DST) and not DRY_RUN:
    shutil.rmtree(DST)
if not DRY_RUN:
    os.makedirs(DST, exist_ok=True)

for root, dirs, files in os.walk(SRC):
    # Exclude unwanted directories
    dirs[:] = [d for d in dirs if not should_exclude_dir(d)]
    rel_dir = os.path.relpath(root, SRC)
    dst_dir = os.path.join(DST, rel_dir) if rel_dir != '.' else DST
    if not DRY_RUN:
        os.makedirs(dst_dir, exist_ok=True)
    for file in files:
        src_file = os.path.join(root, file)
        dst_file = os.path.join(dst_dir, file)
        if is_text_file(file):
            try:
                size = os.path.getsize(src_file)
                if size > LARGE_TEXT_SIZE:
                    logging.warning(f'Skipping large text file: {src_file} ({size} bytes)')
                    if not DRY_RUN:
                        with open(dst_file + '.placeholder', 'w') as f:
                            f.write(f'[Placeholder: {file} skipped, >5MB]')
                    continue
                if not DRY_RUN:
                    with open(src_file, 'r', encoding='utf-8', errors='replace') as fin, \
                         open(dst_file, 'w', encoding='utf-8') as fout:
                        fout.write(fin.read())
                logging.info(f'Copied text file: {src_file} -> {dst_file}')
            except Exception as e:
                logging.error(f'Error copying text file {src_file}: {e}')
                if not DRY_RUN:
                    with open(dst_file + '.placeholder', 'w') as f:
                        f.write(f'[Placeholder for {file} - error: {e}]')
        elif is_media_file(file):
            placeholder_path = dst_file + '.placeholder'
            logging.info(f'Creating placeholder for media: {src_file} -> {placeholder_path}')
            if not DRY_RUN:
                with open(placeholder_path, 'w') as f:
                    f.write(f'[Placeholder for {file}]')
        else:
            try:
                size = os.path.getsize(src_file)
                if size < 1024 * 1024:
                    if not DRY_RUN:
                        shutil.copy2(src_file, dst_file)
                    logging.info(f'Copied small/unknown file: {src_file} -> {dst_file}')
                else:
                    placeholder_path = dst_file + '.placeholder'
                    logging.info(f'Creating placeholder for large/unknown: {src_file} -> {placeholder_path}')
                    if not DRY_RUN:
                        with open(placeholder_path, 'w') as f:
                            f.write(f'[Placeholder for {file} - skipped due to size or type]')
            except Exception as e:
                logging.error(f'Error processing {src_file}: {e}')
                if not DRY_RUN:
                    with open(dst_file + '.placeholder', 'w') as f:
                        f.write(f'[Placeholder for {file} - error: {e}]')

print('Text-only backup extraction complete.' + (' (dry run)' if DRY_RUN else ''))
logging.info('Text-only backup extraction complete.' + (' (dry run)' if DRY_RUN else '')) 
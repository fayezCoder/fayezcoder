"""Build a minimal archive whose contents go directly into public_html."""
from pathlib import Path
from zipfile import ZipFile, ZIP_DEFLATED
root = Path(__file__).resolve().parents[1]
files = [root / name for name in ('index.php', '.htaccess', 'robots.txt', 'sitemap.xml')]
for folder in ('config', 'includes', 'lang'):
    files.extend(sorted((root / folder).glob('*.php')))
files += [root / 'assets/css/site.css', root / 'assets/js/modern.js']
files.extend(sorted((root / 'assets/img/showcase').glob('*.png')))
if not (root / 'assets/css/site.css').is_file():
    raise SystemExit('Run npm run build first')
out = root / 'dist/fayezcoder-hostinger.zip'
out.parent.mkdir(exist_ok=True)
with ZipFile(out, 'w', ZIP_DEFLATED) as archive:
    for path in files:
        archive.write(path, path.relative_to(root))
print(f'{out}: {len(files)} files, {out.stat().st_size:,} bytes')

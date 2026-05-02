'use strict';

const fs   = require('fs');
const path = require('path');

const ROOT       = path.resolve(__dirname, '..');
const BASE_THEME = path.join(ROOT, 'Library', 'Base Theme', 'zamkai-fse');
const INPUT_DIR  = path.join(ROOT, 'input');
const OUTPUT_DIR = path.join(ROOT, 'output');

const BINARY_EXTS = new Set([
  '.woff', '.woff2', '.ttf', '.otf', '.eot',
  '.png', '.jpg', '.jpeg', '.gif', '.ico', '.webp',
  '.zip', '.pdf',
]);

// ── Helpers ────────────────────────────────────────────────────────────────

function isBinary(filePath) {
  return BINARY_EXTS.has(path.extname(filePath).toLowerCase());
}

function applyTokens(content, tokens) {
  for (const [key, val] of Object.entries(tokens)) {
    content = content.split(key).join(val);
  }
  return content;
}

function copyDir(src, dest, tokens) {
  fs.mkdirSync(dest, { recursive: true });
  for (const entry of fs.readdirSync(src, { withFileTypes: true })) {
    const srcPath  = path.join(src,  entry.name);
    const destPath = path.join(dest, entry.name);
    if (entry.isDirectory()) {
      copyDir(srcPath, destPath, tokens);
    } else if (isBinary(srcPath)) {
      fs.copyFileSync(srcPath, destPath);
    } else {
      const content = fs.readFileSync(srcPath, 'utf8');
      fs.writeFileSync(destPath, applyTokens(content, tokens), 'utf8');
    }
  }
}

function toTitleCase(str) {
  return str.replace(/-/g, ' ').replace(/\b\w/g, c => c.toUpperCase());
}

function toPascalCase(slug) {
  return slug.split('-').map(p => p.charAt(0).toUpperCase() + p.slice(1)).join('');
}

function wrapInPhp(html, title, slug, category) {
  return `<?php\n/**\n * Title: ${title}\n * Slug: ${slug}\n * Categories: ${category}\n */\n?>\n${html}`;
}

// Flags patterns that contain human-readable text (potential i18n candidates)
function hasHumanText(html) {
  const stripped = html
    .replace(/<!--[\s\S]*?-->/g, '')
    .replace(/<[^>]+>/g, '\n');
  return stripped.split('\n').some(line => /[A-Za-z]{4,}/.test(line.trim()));
}

// ── Pattern processing ─────────────────────────────────────────────────────

function processPatterns(recipe, tokens, outPatternsDir) {
  const inputPatternsDir = path.join(INPUT_DIR, 'patterns');

  // Build input map: basename → { filePath, category }
  const inputMap = new Map();
  if (fs.existsSync(inputPatternsDir)) {
    for (const entry of fs.readdirSync(inputPatternsDir, { withFileTypes: true })) {
      if (!entry.isDirectory()) continue;
      const categoryDir  = path.join(inputPatternsDir, entry.name);
      const categorySlug = entry.name.toLowerCase();
      for (const file of fs.readdirSync(categoryDir)) {
        if (!file.endsWith('.html')) continue;
        inputMap.set(path.basename(file, '.html'), {
          filePath: path.join(categoryDir, file),
          category: categorySlug,
        });
      }
    }
  }

  const i18nFlags = [];
  let filled = 0, removed = 0, created = 0;
  const processedBasenames = new Set();

  // Fill shells that have a matching input HTML; remove ones that don't
  for (const file of fs.readdirSync(outPatternsDir)) {
    if (!file.endsWith('.php')) continue;
    const basename  = path.basename(file, '.php');
    const shellPath = path.join(outPatternsDir, file);

    if (inputMap.has(basename)) {
      const { filePath, category } = inputMap.get(basename);
      const html         = applyTokens(fs.readFileSync(filePath, 'utf8'), tokens);
      const shellContent = fs.readFileSync(shellPath, 'utf8');
      fs.writeFileSync(shellPath, shellContent + html, 'utf8');
      console.log(`  ✓ ${toTitleCase(basename)}  →  ${recipe.slug}/${basename}`);
      if (hasHumanText(html)) i18nFlags.push(`${category}/${basename}.html`);
      processedBasenames.add(basename);
      filled++;
    } else {
      fs.rmSync(shellPath);
      removed++;
    }
  }

  // Create new PHP files for input patterns that have no matching shell
  for (const [basename, { filePath, category }] of inputMap) {
    if (processedBasenames.has(basename)) continue;
    const html        = applyTokens(fs.readFileSync(filePath, 'utf8'), tokens);
    const patternSlug = `${recipe.slug}/${basename}`;
    const php         = wrapInPhp(html, toTitleCase(basename), patternSlug, category);
    fs.writeFileSync(path.join(outPatternsDir, `${basename}.php`), php, 'utf8');
    console.log(`  ✓ ${toTitleCase(basename)}  →  ${patternSlug}`);
    if (hasHumanText(html)) i18nFlags.push(`${category}/${basename}.html`);
    created++;
  }

  if (i18nFlags.length) {
    console.log('\n  ⚠  These patterns contain visible text — consider adding i18n:');
    i18nFlags.forEach(f => console.log(`     · ${f}`));
  }

  const total = filled + created;
  if (total > 0 || removed > 0) {
    console.log(`\n  ${total} pattern(s) assembled, ${removed} empty slot(s) removed.`);
  } else {
    console.log('  No patterns found — all slots removed.');
  }
}

// ── Main ───────────────────────────────────────────────────────────────────

function main() {
  const recipePath = path.join(INPUT_DIR, 'recipe.json');

  if (!fs.existsSync(recipePath)) {
    console.error('\n✗  input/recipe.json not found.\n');
    process.exit(1);
  }

  const recipe = JSON.parse(fs.readFileSync(recipePath, 'utf8'));
  const {
    name,
    slug,
    author         = '',
    authorUri      = '',
    description    = '',
    version        = '1.0.0',
    composerVendor = 'vendor',
    colors         = {},
  } = recipe;

  if (!name || !slug) {
    console.error('\n✗  recipe.json must have "name" and "slug".\n');
    process.exit(1);
  }

  console.log(`\n⚙  Combobulating: "${name}" (${slug})\n`);

  const namespace = toPascalCase(slug);

  // Build token map — explicit placeholders first, then fallback identifiers
  const tokens = {
    '{theme.name}'           : name,
    '{theme.slug}'           : slug,
    '{theme.author}'         : author,
    '{theme.authorUri}'      : authorUri,
    '{theme.description}'    : description,
    '{theme.version}'        : version,
    '{theme.namespace}'      : namespace,
    '{theme.composerVendor}' : composerVendor,
    // Color placeholders
    ...Object.fromEntries(
      Object.entries(colors).map(([s, hex]) => [`{color.${s}}`, hex])
    ),
    // Fallback: catch any remaining base-theme identifiers
    'zamkai-fse' : slug,
    'Zamkai FSE' : name,
    'ZamkaiFse'  : namespace,
  };

  const outDir = path.join(OUTPUT_DIR, slug);

  if (fs.existsSync(outDir)) {
    fs.rmSync(outDir, { recursive: true });
    console.log(`  Cleared existing output/${slug}/`);
  }

  console.log('  Copying and transforming base theme...');
  copyDir(BASE_THEME, outDir, tokens);

  console.log('\n  Processing patterns...\n');
  processPatterns(recipe, tokens, path.join(outDir, 'patterns'));

  console.log(`\n✓  Done — theme output to: output/${slug}/\n`);
}

main();

<?php
/**
 * Fayez Almutairi — Portfolio Entry Point
 * fayezcoder.com · Obsidian Cyberpunk Vanguard
 *
 * Clean URL router: every pretty URL is handled here.
 *   /            /services   /projects   /about   /skills   /contact
 *   /en          /en/services ...
 */

require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/router.php';

// 1. Canonicalise the request URL (lowercase, no extension, no trailing slash,
//    no /ar prefix) before anything is rendered.
$fc_canonical = fc_canonical_redirect();
if ($fc_canonical !== null) {
    fc_redirect($fc_canonical);
}

// 2. Language, translations and the current page slug.
require_once __DIR__ . '/includes/i18n.php';

$projects = require __DIR__ . '/includes/projects.php';

if (IS_404) {
    http_response_code(404);
}

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';

echo '<main class="w-full flex flex-col">';

if (IS_404) {
    require __DIR__ . '/includes/section-404.php';
} else {
    // One section per clean URL (home renders the full hero landing panel),
    // so every page has unique, indexable content.
    $fc_section = fc_pages()[CURRENT_PAGE]['section'] ?? DEFAULT_PAGE;
    $fc_file    = __DIR__ . '/includes/section-' . ($fc_section === 'home' ? 'hero' : $fc_section) . '.php';
    if (is_file($fc_file)) {
        require $fc_file;
    }
}

echo '</main>';

require_once __DIR__ . '/includes/footer.php';

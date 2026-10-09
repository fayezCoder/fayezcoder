<?php
/**
 * Router & URL Helpers
 *
 * Clean URL contract (no fragments "#", no ".php" / ".html" extensions):
 *   Arabic  (default) : /                /services   /projects   /about   /skills   /contact
 *   English           : /en              /en/services ...
 *
 * URLs are resolved from the *visible* request path, so the site keeps working
 * even if a host tweaks the rewrite rules. `.htaccess` maps every unknown path
 * onto index.php while preserving the visible request URI.
 */

/**
 * Page registry: slug => meta/section mapping.
 * The slug is both the URL segment and the section id.
 */
function fc_pages(): array
{
    return [
        'home'     => ['section' => 'home',     'nav' => 'nav.home',      'meta' => 'pages.home'],
        'services' => ['section' => 'services', 'nav' => 'nav.services',  'meta' => 'pages.services'],
        'projects' => ['section' => 'projects', 'nav' => 'nav.portfolio', 'meta' => 'pages.projects'],
        'about'    => ['section' => 'about',    'nav' => 'nav.about',     'meta' => 'pages.about'],
        'skills'   => ['section' => 'skills',   'nav' => 'nav.skills',    'meta' => 'pages.skills'],
        'contact'  => ['section' => 'contact',  'nav' => 'nav.contact',   'meta' => 'pages.contact'],
    ];
}

/** Base path of the installation ('' when served from the domain root). */
function fc_base_path(): string
{
    $script = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '/index.php');
    $dir = rtrim(str_replace('\\', '/', dirname($script)), '/');
    return $dir === '' || $dir === '.' ? '' : $dir;
}

/** Raw, decoded request path with the installation base path removed. */
function fc_request_path(): string
{
    $uri = $_SERVER['REQUEST_URI'] ?? '/';
    $path = explode('?', $uri, 2)[0] ?: '/';
    $path = rawurldecode($path);
    $base = fc_base_path();
    if ($base !== '' && str_starts_with($path, $base)) {
        $path = substr($path, strlen($base));
    }
    return $path === '' ? '/' : $path;
}

/**
 * Parse the request into ['lang' => 'ar|en', 'page' => 'home|404|...'].
 */
function fc_parse_request(): array
{
    $path = fc_request_path();
    $segments = array_values(array_filter(explode('/', $path), static fn ($s) => $s !== ''));

    $lang = DEFAULT_LANG;
    if (isset($segments[0]) && in_array(strtolower($segments[0]), SUPPORTED_LANGS, true)) {
        $lang = strtolower(array_shift($segments));
    }

    if (count($segments) === 0) {
        return ['lang' => $lang, 'page' => DEFAULT_PAGE];
    }
    if (count($segments) > 1) {
        return ['lang' => $lang, 'page' => '404'];
    }

    $slug = strtolower($segments[0]);
    // Tolerate legacy extensions, they are redirected to the clean URL.
    $slug = (string) preg_replace('/\.(php|html?)$/', '', $slug);

    if ($slug === 'index') {
        $slug = DEFAULT_PAGE;
    }
    return ['lang' => $lang, 'page' => array_key_exists($slug, fc_pages()) ? $slug : '404'];
}

/** Requested language as derived from the clean URL. */
function fc_request_lang(): string
{
    return fc_parse_request()['lang'];
}

/** Requested page slug ('404' when unknown). */
function fc_request_page(): string
{
    return fc_parse_request()['page'];
}

/**
 * Absolute path of a page in a given language.
 *   fc_url('contact')       -> /contact      (current language)
 *   fc_url('contact', 'en') -> /en/contact
 *   fc_url('home')          -> /            (or /en for English)
 */
function fc_url(string $page = DEFAULT_PAGE, ?string $lang = null): string
{
    $lang = $lang ?? (defined('CURRENT_LANG') ? CURRENT_LANG : fc_request_lang());
    if (!in_array($lang, SUPPORTED_LANGS, true)) {
        $lang = DEFAULT_LANG;
    }

    $prefix = $lang === DEFAULT_LANG ? '' : '/' . $lang;
    $slug = ($page === DEFAULT_PAGE || $page === '') ? '' : '/' . $page;

    $url = $prefix . $slug;
    return $url === '' ? '/' : $url;
}

/** Fully qualified, canonical URL of a page/language combination. */
function fc_absolute_url(string $page = DEFAULT_PAGE, ?string $lang = null): string
{
    return APP_URL . fc_url($page, $lang);
}

/** Root relative asset URL with cache-busting version. */
function fc_asset(string $path): string
{
    return '/' . ltrim($path, '/') . '?v=' . ASSET_VERSION;
}

/** hreflang map for a page (used for <link rel="alternate">). */
function fc_hreflang(string $page): array
{
    $map = ['x-default' => fc_absolute_url($page, DEFAULT_LANG)];
    foreach (SUPPORTED_LANGS as $lang) {
        $map[$lang] = fc_absolute_url($page, $lang);
    }
    return $map;
}

/**
 * Canonical URL for the current request: lower case, no extension, no trailing
 * slash, default language without an /ar prefix. Null when already canonical.
 */
function fc_canonical_redirect(): ?string
{
    $parsed = fc_parse_request();
    // Unknown paths remain real 404s, even when a query names a valid page.
    if ($parsed['page'] === '404') {
        return null;
    }

    $page = $parsed['page'];
    $lang = $parsed['lang'];
    if ($page === DEFAULT_PAGE && isset($_GET['page']) && is_string($_GET['page'])
        && array_key_exists($_GET['page'], fc_pages())) {
        $page = $_GET['page'];
    }
    if (isset($_GET['lang']) && is_string($_GET['lang'])) {
        $requested = strtolower(trim($_GET['lang']));
        if (in_array($requested, SUPPORTED_LANGS, true)) {
            $lang = $requested;
        }
    }

    $target = fc_url($page, $lang);
    $rawPath = explode('?', $_SERVER['REQUEST_URI'] ?? '/', 2)[0] ?: '/';
    if ($rawPath === $target && !isset($_GET['lang']) && !isset($_GET['page'])) {
        return null;
    }
    // Retain unrelated query parameters (e.g. campaign attribution).
    $query = $_GET;
    unset($query['lang'], $query['page']);
    $suffix = http_build_query($query, '', '&', PHP_QUERY_RFC3986);
    return $target . ($suffix === '' ? '' : '?' . $suffix);
}

/** Send a permanent redirect and stop (301 keeps the SEO value of old URLs). */
function fc_redirect(string $target, int $status = 301): void
{
    if (!headers_sent()) {
        header('Location: ' . $target, true, $status);
        header('Cache-Control: no-store');
    }
    exit;
}

/** True when the given page is the one currently being rendered. */
function fc_is_current_page(string $page): bool
{
    return defined('CURRENT_PAGE') && CURRENT_PAGE === $page;
}

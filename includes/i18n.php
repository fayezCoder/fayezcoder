<?php
/**
 * Localisation (i18n) Helper — clean URL driven
 *
 * The language always comes from the URL itself:
 *   /            -> Arabic (default locale)
 *   /en          -> English
 * Legacy "?lang=xx" links are permanently redirected to the clean URL, and no
 * session/cookie is used, so full page caching on shared hosting stays safe.
 */

// Legacy parameters are validated and redirected by the router before rendering.
$current_lang = fc_request_lang();
if (!in_array($current_lang, SUPPORTED_LANGS, true)) {
    $current_lang = DEFAULT_LANG;
}

define('CURRENT_LANG', $current_lang);
define('IS_RTL', CURRENT_LANG === 'ar');
define('LANG_DIR', IS_RTL ? 'rtl' : 'ltr');
define('CURRENT_PAGE', fc_request_page());
define('IS_404', CURRENT_PAGE === '404');
define('LANG_PREFIX', IS_RTL ? '' : '/' . CURRENT_LANG);   // '' for the default locale

// Load translation strings
$langFile = __DIR__ . '/../lang/' . CURRENT_LANG . '.php';
$trans = file_exists($langFile) ? require $langFile : [];

/**
 * Translation lookup.
 * Usage: __t('nav.home') or __t('hero.title', 'Default Title')
 */
function __t(string $key, string $default = ''): string {
    global $trans;
    $keys = explode('.', $key);
    $arr = $trans;
    foreach ($keys as $segment) {
        if (is_array($arr) && isset($arr[$segment])) {
            $arr = $arr[$segment];
        } else {
            return $default !== '' ? $default : $key;
        }
    }
    return is_string($arr) ? $arr : (string) $arr;
}

<?php
/**
 * Localization (i18n) Helper
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Handle language switch via query param ?lang=ar or ?lang=en
if (isset($_GET['lang'])) {
    $requested_lang = strtolower(trim($_GET['lang']));
    if (in_array($requested_lang, ['ar', 'en'])) {
        $_SESSION['lang'] = $requested_lang;
        if (!headers_sent()) {
            setcookie('site_lang', $requested_lang, time() + (86400 * 30), "/"); // 30 days
        }
        // Clean URL redirect if running in web environment
        if (!empty($_SERVER["REQUEST_URI"])) {
            $redirectUrl = strtok($_SERVER["REQUEST_URI"], '?');
            header("Location: " . $redirectUrl);
            exit;
        }
    }
}

// Determine current language
if (isset($_SESSION['lang'])) {
    $current_lang = $_SESSION['lang'];
} elseif (isset($_COOKIE['site_lang']) && in_array($_COOKIE['site_lang'], ['ar', 'en'])) {
    $current_lang = $_COOKIE['site_lang'];
} else {
    $current_lang = defined('DEFAULT_LANG') ? DEFAULT_LANG : 'ar';
}

define('CURRENT_LANG', $current_lang);
define('IS_RTL', CURRENT_LANG === 'ar');
define('LANG_DIR', IS_RTL ? 'rtl' : 'ltr');

// Load translation strings
$langFile = __DIR__ . '/../lang/' . CURRENT_LANG . '.php';
if (file_exists($langFile)) {
    $trans = require $langFile;
} else {
    $trans = [];
}

/**
 * Translation function
 * Usage: __t('nav.home') or __t('hero.title', 'Default Title')
 */
function __t(string $key, string $default = ''): string {
    global $trans;
    $keys = explode('.', $key);
    $arr = $trans;
    foreach ($keys as $segment) {
        if (isset($arr[$segment])) {
            $arr = $arr[$segment];
        } else {
            return $default ?: $key;
        }
    }
    return is_string($arr) ? $arr : (string)$arr;
}

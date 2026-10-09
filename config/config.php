<?php
/**
 * Application Configuration
 * Fayez Almutairi Portfolio — fayezcoder.com
 *
 * Deployed on Hostinger shared hosting (Apache / LiteSpeed + .htaccess).
 * No database or API layer: every contact submission is handed to WhatsApp.
 */

// ---------------------------------------------------------------------------
// Environment: production by default; explicit opt-in for local debugging
// ---------------------------------------------------------------------------
// Production is the default; request headers must never enable debug output.
define('APP_ENV', getenv('APP_ENV') === 'development' ? 'development' : 'production');
define('IS_LOCAL', APP_ENV === 'development');
define('APP_IS_PRODUCTION', APP_ENV === 'production');

// ---------------------------------------------------------------------------
// Canonical domain & URLs
// ---------------------------------------------------------------------------
define('APP_DOMAIN', 'fayezcoder.com');            // no scheme, no "www."
define('APP_URL', 'https://' . APP_DOMAIN);        // canonical origin (canonical / og / sitemap)
define('ASSET_VERSION', '3.6.1');                  // bump to bust browser caches

// ---------------------------------------------------------------------------
// Localisation — clean, locale aware URLs:
//   Arabic (default) : /               /services    /contact
//   English          : /en             /en/services /en/contact
// ---------------------------------------------------------------------------
define('DEFAULT_LANG', 'ar');
define('DEFAULT_PAGE', 'home');
define('SUPPORTED_LANGS', ['ar', 'en']);

// ---------------------------------------------------------------------------
// Direct WhatsApp lead channel (international format: no "+", no leading zero)
// ---------------------------------------------------------------------------
define('WHATSAPP_NUMBER', '966555861780');
define('WHATSAPP_DISPLAY', '+966 55 586 1780');
define('WHATSAPP_LINK', 'https://wa.me/' . WHATSAPP_NUMBER);

// ---------------------------------------------------------------------------
// Runtime error handling
// ---------------------------------------------------------------------------
if (APP_IS_PRODUCTION) {
    ini_set('display_errors', '0');
    ini_set('log_errors', '1');
    error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
} else {
    ini_set('display_errors', '1');
    error_reporting(E_ALL);
}

date_default_timezone_set('Asia/Riyadh');

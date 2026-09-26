<?php
/**
 * Application Configuration
 * Fayez Almutairi Portfolio (fayezcoder.com)
 *
 * NOTE: No database / API layer is required.
 * Every contact form submission is handed off directly to WhatsApp.
 */

// Environment settings
define('APP_ENV', 'development'); // change to 'production' on Hostinger if desired
define('APP_NAME', 'Fayez Almutairi Portfolio');
define('APP_URL', 'https://fayezcoder.com');
define('DEFAULT_LANG', 'ar'); // Default language is Arabic

// Direct WhatsApp lead channel (international format, no plus sign / no leading zeros)
define('WHATSAPP_NUMBER', '966555861780');
define('WHATSAPP_DISPLAY', '+966 55 586 1780');
define('WHATSAPP_LINK', 'https://wa.me/' . WHATSAPP_NUMBER);


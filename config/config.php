<?php
/**
 * Database & App Configuration
 * Fayez Coder Portfolio
 */

// Environment settings
define('APP_ENV', 'development'); // change to 'production' on Hostinger if desired
define('APP_NAME', 'Fayez Al-Mutairi Portfolio');
define('APP_URL', 'https://fayezcoder.com');
define('DEFAULT_LANG', 'ar'); // Default language is Arabic

// Database credentials (easy to configure on Hostinger cPanel)
define('DB_HOST', getenv('DB_HOST') ?: 'localhost');
define('DB_NAME', getenv('DB_NAME') ?: 'fayezcoder_db');
define('DB_USER', getenv('DB_USER') ?: 'fayezcoder_user');
define('DB_PASS', getenv('DB_PASS') ?: '');
define('DB_CHARSET', 'utf8mb4');

/**
 * PDO Database Connection Singleton
 */
class Database {
    private static ?PDO $instance = null;

    public static function getConnection(): ?PDO {
        if (self::$instance === null) {
            try {
                $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
                $options = [
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES   => false,
                ];
                self::$instance = new PDO($dsn, DB_USER, DB_PASS, $options);
            } catch (PDOException $e) {
                // If database is not configured yet on local dev, log error gracefully
                error_log("Database connection error: " . $e->getMessage());
                return null;
            }
        }
        return self::$instance;
    }
}

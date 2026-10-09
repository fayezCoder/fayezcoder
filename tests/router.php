<?php
require __DIR__ . '/../config/config.php';
require __DIR__ . '/../includes/router.php';
set_error_handler(static function ($severity, $message, $file, $line) {
    throw new ErrorException($message, 0, $severity, $file, $line);
});
$_SERVER['SCRIPT_NAME'] = '/index.php';
$cases = [
    ['/', 'home', 'ar', null], ['/en', 'home', 'en', null],
    ['/projects', 'projects', 'ar', null], ['/en/projects', 'projects', 'en', null],
    ['/Projects/', 'projects', 'ar', '/projects'],
    ['/ar/contact', 'contact', 'ar', '/contact'],
    ['/en/contact.html', 'contact', 'en', '/en/contact'],
    ['/index.php?lang=en&page=projects', 'home', 'ar', '/en/projects'],
    ['/?page[]=home', 'home', 'ar', '/'],
    ['/?lang[]=en', 'home', 'ar', '/'],
    ['/?page[bad][nested]=home&lang[bad]=en', 'home', 'ar', '/'],
    ['/?lang=xx', 'home', 'ar', '/'],
    ['/?page=skills&lang=en', 'home', 'ar', '/en/skills'],
    ['/en/?lang=ar', 'home', 'en', '/'],
    ['/en/projects/?lang=ar&utm_source=test', 'projects', 'en', '/projects?utm_source=test'],
    ['/services?page=contact', 'services', 'ar', '/services'],
    ['/missing?page=contact', '404', 'ar', null],
    ['/en/missing?lang=ar', '404', 'en', null],
    ['/missing/', '404', 'ar', null],
    ['/%2fexample.com/', '404', 'ar', null],
    ['//example.com/', '404', 'ar', null],
    ['/projects?utm_source=test', 'projects', 'ar', null],
];
foreach ($cases as [$uri, $page, $lang, $redirect]) {
    $_SERVER['REQUEST_URI'] = $uri;
    parse_str(explode('?', $uri, 2)[1] ?? '', $_GET);
    $actual = [fc_request_page(), fc_request_lang(), fc_canonical_redirect()];
    if ($actual !== [$page, $lang, $redirect]) {
        throw new RuntimeException($uri . ': ' . json_encode($actual));
    }
}
echo count($cases) . " router regression cases passed\n";

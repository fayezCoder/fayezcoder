<?php
/**
 * Modern Tech Portfolio Entry Point
 * Fayez Almutairi (fayezcoder.com)
 * Architecture: Obsidian Cyberpunk Vanguard
 */

require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/i18n.php';
$projects = require __DIR__ . '/includes/projects.php';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';

echo '<main class="w-full flex flex-col">';
require_once __DIR__ . '/includes/section-hero.php';
require_once __DIR__ . '/includes/section-services.php';
require_once __DIR__ . '/includes/section-projects.php';
require_once __DIR__ . '/includes/section-about.php';
require_once __DIR__ . '/includes/section-skills.php';
require_once __DIR__ . '/includes/section-contact.php';
echo '</main>';

require_once __DIR__ . '/includes/footer.php';


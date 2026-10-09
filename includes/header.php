<?php
/**
 * Global <head> — Obsidian Cyberpunk Vanguard
 * Per page title/description/canonical, hreflang alternates and social cards.
 */
$fc_page_key  = IS_404 ? DEFAULT_PAGE : CURRENT_PAGE;
$fc_meta_key  = fc_pages()[$fc_page_key]['meta'] ?? 'pages.home';
if (IS_404) {
    $fc_title = __t('notfound.heading', '404');
    $fc_desc  = __t('notfound.desc');
} else {
    $fc_title = __t($fc_meta_key . '.title', __t('nav.brand'));
    $fc_desc  = __t($fc_meta_key . '.desc', strip_tags(__t('hero.bio')));
}
$fc_canonical = fc_absolute_url($fc_page_key);
?>
<!DOCTYPE html>
<html class="dark" lang="<?= CURRENT_LANG ?>" dir="<?= LANG_DIR ?>">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= htmlspecialchars($fc_title, ENT_QUOTES) ?></title>
    <meta name="description" content="<?= htmlspecialchars($fc_desc, ENT_QUOTES) ?>" />
    <meta name="author" content="Fayez Almutairi" />
    <meta name="theme-color" content="#0f131c" />
    <?php if (IS_404): ?>
        <meta name="robots" content="noindex, follow" />
    <?php else: ?>
        <meta name="robots" content="index, follow, max-image-preview:large" />
    <?php endif; ?>
    <?php if (!IS_404): ?>
        <link rel="canonical" href="<?= $fc_canonical ?>" />
        <?php foreach (fc_hreflang($fc_page_key) as $fc_hl_code => $fc_hl_url): ?>
            <link rel="alternate" hreflang="<?= $fc_hl_code ?>" href="<?= $fc_hl_url ?>" />
        <?php endforeach; ?>
    <?php endif; ?>

    <!-- Open Graph / social sharing -->
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="<?= htmlspecialchars(__t('nav.brand'), ENT_QUOTES) ?>" />
    <meta property="og:title" content="<?= htmlspecialchars($fc_title, ENT_QUOTES) ?>" />
    <meta property="og:description" content="<?= htmlspecialchars($fc_desc, ENT_QUOTES) ?>" />
    <meta property="og:url" content="<?= $fc_canonical ?>" />
    <meta property="og:image" content="<?= APP_URL . '/assets/img/showcase/logo.png' ?>" />
    <meta property="og:locale" content="<?= CURRENT_LANG === 'ar' ? 'ar_SA' : 'en_US' ?>" />
    <meta name="twitter:card" content="summary_large_image" />

    <link rel="icon" type="image/png" href="<?= fc_asset('assets/img/showcase/logo.png') ?>" />

    <!-- Google Fonts & Material Symbols -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@500;600&family=Plus+Jakarta+Sans:wght@600;700;800&family=Tajawal:wght@400;500;700;800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet" />

    <!-- Bootstrap Icons (WhatsApp / social glyphs) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    <link rel="stylesheet" href="<?= fc_asset('assets/css/site.css') ?>" />
</head>
<body id="page-top" class="bg-background text-on-background font-body-md antialiased selection:bg-primary-container selection:text-on-primary-container min-h-screen">

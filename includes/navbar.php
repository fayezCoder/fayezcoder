<?php
/**
 * Global Navbar — Obsidian Cyberpunk Vanguard
 * Clean-URL navigation with active page highlighting (no "#" fragments).
 */
$fc_nav_items = [
    'services' => 'nav.services',
    'projects' => 'nav.portfolio',
    'about'    => 'nav.about',
    'skills'   => 'nav.skills',
    'contact'  => 'nav.contact',
];
$fc_lang_page   = IS_404 ? DEFAULT_PAGE : CURRENT_PAGE;
$fc_nav_link    = static function (string $page, string $label, string $base, string $active): string {
    $is_active = fc_is_current_page($page);
    $cls       = $base . ' ' . ($is_active ? $active : '');
    return '<a class="' . $cls . '" href="' . fc_url($page) . '"' . ($is_active ? ' aria-current="page"' : '') . '>' . $label . '</a>';
};
$fc_desktop_base = 'font-body-sm text-body-sm transition-colors px-3 py-1.5 rounded-lg';
$fc_desktop_on   = 'text-white bg-surface-container-high font-semibold';
$fc_mobile_base  = 'px-3 py-2 rounded-lg text-body-md transition-colors';
$fc_mobile_on    = 'bg-surface-container text-white font-semibold';
?>
<header class="fixed top-0 left-0 right-0 z-50 bg-surface/85 backdrop-blur-xl border-b border-surface-container-high/60 shadow-[0_4px_20px_rgba(0,0,0,0.4)]">
    <div class="h-20 max-w-7xl mx-auto px-margin-mobile lg:px-margin flex items-center justify-between gap-2 sm:gap-space-md">
        <!-- Brand & Available Badge -->
        <div class="flex items-center gap-space-md min-w-0">
            <a href="<?= fc_url(DEFAULT_PAGE) ?>" class="flex items-center gap-2 sm:gap-3 min-w-0 group">
                <span class="brand-mark shrink-0" aria-hidden="true"></span>
                <div class="flex flex-col min-w-0">
                    <span class="font-headline-sm text-sm sm:text-headline-sm sm:whitespace-nowrap text-on-surface tracking-tight leading-none font-bold"><?= __t('nav.brand') ?></span>
                    <span class="hidden sm:block font-label-badge text-label-badge text-secondary font-semibold uppercase tracking-wider mt-1"><?= __t('nav.sub') ?></span>
                </div>
            </a>

            <div class="hidden min-[1440px]:flex items-center gap-space-xs px-3 py-1 rounded-full bg-surface-container-high border border-outline-variant/30">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-secondary opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-secondary"></span>
                </span>
                <span class="font-label-badge text-label-badge text-on-surface-variant"><?= __t('nav.status_short') ?></span>
            </div>
        </div>

        <!-- Navigation Links -->
        <nav class="hidden lg:flex items-center gap-1.5" id="desktop-nav">
            <?php foreach ($fc_nav_items as $fc_slug => $fc_label): ?>
                <?= $fc_nav_link($fc_slug, __t($fc_label), $fc_desktop_base, $fc_desktop_on) ?>
            <?php endforeach; ?>
        </nav>

        <!-- Right Side: Language Switcher & Primary CTA -->
        <div class="flex items-center gap-1 sm:gap-3 shrink-0">
            <!-- Language Switcher Pill (keeps the current page) -->
            <a href="<?= fc_url($fc_lang_page, __t('other_lang_code')) ?>" class="inline-flex items-center gap-1 px-2 sm:px-3 py-2 rounded-full bg-surface-container hover:bg-surface-container-high border border-outline-variant/40 text-on-surface text-xs font-label-badge font-semibold transition-all hover:border-secondary">
                <span class="material-symbols-outlined text-[15px] text-secondary">public</span>
                <span><?= __t('other_lang') ?></span>
            </a>

            <!-- Let's Talk CTA -->
            <a href="<?= fc_url('contact') ?>" class="hidden sm:inline-flex items-center justify-center gap-1.5 px-space-md py-2 rounded-xl <?= fc_is_current_page('contact') ? 'bg-tertiary text-on-tertiary' : 'bg-tertiary-container text-on-tertiary-container hover:bg-tertiary hover:text-on-tertiary' ?> font-headline-sm text-headline-sm font-semibold transition-all duration-200 hover:scale-[1.02] shadow-[0_0_20px_rgba(225,29,72,0.35)]">
                <span><?= __t('nav.talk_btn') ?></span>
                <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
            </a>

            <!-- Mobile Hamburger Button -->
            <button id="mobile-menu-btn" type="button" class="lg:hidden min-w-11 min-h-11 inline-flex items-center justify-center p-2 rounded-lg bg-surface-container text-on-surface hover:bg-surface-container-high" aria-label="<?= __t('nav.menu_label') ?>" aria-controls="mobile-nav-drawer" aria-expanded="false">
                <span class="material-symbols-outlined text-[24px]">menu</span>
            </button>
        </div>
    </div>

    <!-- Mobile Dropdown Menu -->
    <div id="mobile-nav-drawer" class="hidden lg:hidden bg-surface-container-low border-b border-surface-container-high px-margin-mobile py-4 flex flex-col gap-2 max-h-[calc(100dvh-5rem)] overflow-y-auto">
        <?php foreach ($fc_nav_items as $fc_slug => $fc_label): ?>
            <?= $fc_nav_link($fc_slug, __t($fc_label), $fc_mobile_base, $fc_mobile_on) ?>
        <?php endforeach; ?>
        <div class="pt-2 border-t border-surface-container-high flex items-center justify-between">
            <a href="<?= fc_url($fc_lang_page, __t('other_lang_code')) ?>" class="inline-flex items-center gap-1 text-sm text-secondary">
                <span class="material-symbols-outlined text-[16px]">public</span>
                <span><?= __t('other_lang') ?></span>
            </a>
            <a href="<?= fc_url('contact') ?>" class="px-4 py-2 rounded-lg <?= fc_is_current_page('contact') ? 'bg-tertiary text-on-tertiary' : 'bg-tertiary-container text-on-tertiary-container' ?> text-sm font-semibold"><?= __t('nav.talk_btn') ?></a>
        </div>
    </div>
</header>
<div id="top" class="h-20"></div>
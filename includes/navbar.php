<?php
/**
 * Global Navbar - Obsidian Cyberpunk Vanguard
 */
?>
<header class="fixed top-0 left-0 right-0 z-50 bg-surface/85 backdrop-blur-xl border-b border-surface-container-high/60 shadow-[0_4px_20px_rgba(0,0,0,0.4)]">
    <div class="h-20 max-w-7xl mx-auto px-margin-mobile lg:px-margin flex items-center justify-between gap-space-md">
        <!-- Brand & Available Badge -->
        <div class="flex items-center gap-space-md shrink-0">
            <a href="#top" class="flex items-center gap-3 group">
                <img alt="<?= __t('nav.brand') ?> Logo" class="h-9 w-auto object-contain transition-transform group-hover:scale-105" src="assets/img/showcase/logo.png" />
                <div class="flex flex-col">
                    <span class="font-headline-sm text-headline-sm text-on-surface tracking-tight leading-none font-bold"><?= __t('nav.brand') ?></span>
                    <span class="font-label-badge text-label-badge text-secondary font-semibold uppercase tracking-wider mt-1"><?= __t('nav.sub') ?></span>
                </div>
            </a>
            
            <div class="hidden xl:flex items-center gap-space-xs px-3 py-1 rounded-full bg-surface-container-high border border-outline-variant/30">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-secondary opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-secondary"></span>
                </span>
                <span class="font-label-badge text-label-badge text-on-surface-variant"><?= __t('nav.status_available') ?></span>
            </div>
        </div>

        <!-- Navigation Links -->
        <nav class="hidden lg:flex items-center gap-1.5" id="desktop-nav">
            <a class="font-body-sm text-body-sm text-on-surface hover:text-white px-3 py-1.5 rounded-lg transition-colors" href="#services"><?= __t('nav.services') ?></a>
            <a class="font-body-sm text-body-sm text-on-surface hover:text-white px-3 py-1.5 rounded-lg transition-colors" href="#projects"><?= __t('nav.portfolio') ?></a>
            <a class="font-body-sm text-body-sm text-on-surface hover:text-white px-3 py-1.5 rounded-lg transition-colors" href="#about"><?= __t('nav.about') ?></a>
            <a class="font-body-sm text-body-sm text-on-surface hover:text-white px-3 py-1.5 rounded-lg transition-colors" href="#skills"><?= __t('nav.skills') ?></a>
            <a class="font-body-sm text-body-sm text-on-surface hover:text-white px-3 py-1.5 rounded-lg transition-colors" href="#contact"><?= __t('nav.contact') ?></a>
        </nav>

        <!-- Right Side: Language Switcher & Primary CTA -->
        <div class="flex items-center gap-3 shrink-0">
            <!-- Language Switcher Pill -->
            <a href="?lang=<?= __t('other_lang_code') ?>" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-surface-container hover:bg-surface-container-high border border-outline-variant/40 text-on-surface text-xs font-label-badge font-semibold transition-all hover:border-secondary">
                <span class="material-symbols-outlined text-[15px] text-secondary">public</span>
                <span><?= __t('other_lang') ?></span>
            </a>

            <!-- Let's Talk CTA -->
            <a href="#contact" class="hidden sm:inline-flex items-center justify-center gap-1.5 px-space-md py-2 rounded-xl bg-tertiary-container hover:bg-tertiary text-on-tertiary font-headline-sm text-headline-sm font-semibold transition-all duration-200 hover:scale-[1.02] shadow-[0_0_20px_rgba(225,29,72,0.35)]">
                <span><?= __t('nav.talk_btn') ?></span>
                <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
            </a>

            <!-- Mobile Hamburger Button -->
            <button id="mobile-menu-btn" type="button" class="lg:hidden p-2 rounded-lg bg-surface-container text-on-surface hover:bg-surface-container-high focus:outline-none" aria-label="Toggle Navigation" aria-controls="mobile-nav-drawer" aria-expanded="false">
                <span class="material-symbols-outlined text-[24px]">menu</span>
            </button>
        </div>
    </div>

    <!-- Mobile Dropdown Menu -->
    <div id="mobile-nav-drawer" class="hidden lg:hidden bg-surface-container-low border-b border-surface-container-high px-margin-mobile py-4 flex flex-col gap-2">
        <a class="px-3 py-2 rounded-lg hover:bg-surface-container text-on-surface text-body-md" href="#services"><?= __t('nav.services') ?></a>
        <a class="px-3 py-2 rounded-lg hover:bg-surface-container text-on-surface text-body-md" href="#projects"><?= __t('nav.portfolio') ?></a>
        <a class="px-3 py-2 rounded-lg hover:bg-surface-container text-on-surface text-body-md" href="#about"><?= __t('nav.about') ?></a>
        <a class="px-3 py-2 rounded-lg hover:bg-surface-container text-on-surface text-body-md" href="#skills"><?= __t('nav.skills') ?></a>
        <a class="px-3 py-2 rounded-lg hover:bg-surface-container text-on-surface text-body-md" href="#contact"><?= __t('nav.contact') ?></a>
        <div class="pt-2 border-t border-surface-container-high flex items-center justify-between">
            <a href="?lang=<?= __t('other_lang_code') ?>" class="inline-flex items-center gap-1 text-sm text-secondary">
                <span class="material-symbols-outlined text-[16px]">public</span>
                <span><?= __t('other_lang') ?></span>
            </a>
            <a href="#contact" class="px-4 py-2 rounded-lg bg-tertiary-container text-on-tertiary text-sm font-semibold"><?= __t('nav.talk_btn') ?></a>
        </div>
    </div>
</header>
<div id="top" class="h-20"></div>

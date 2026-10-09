<?php
/**
 * 404 — Page Not Found (Obsidian Cyberpunk Vanguard)
 */
?>
<section class="relative w-full overflow-hidden bg-surface pt-space-3xl pb-space-3xl" data-section="404" aria-labelledby="notfound-heading">
    <div class="pointer-events-none absolute -top-32 left-1/2 h-[420px] w-[420px] -translate-x-1/2 rounded-full bg-primary-container/20 blur-[130px]"></div>
    <div class="pointer-events-none absolute bottom-0 -right-24 h-[320px] w-[320px] rounded-full bg-secondary/10 blur-[130px]"></div>

    <div class="max-w-3xl mx-auto px-margin-mobile lg:px-margin relative z-10 text-center flex flex-col items-center gap-space-lg">
        <span class="inline-flex items-center gap-space-xs px-space-md py-1.5 rounded-full bg-surface-container-high text-secondary border border-outline-variant/30 font-label-badge text-label-badge uppercase tracking-wider">
            <span class="material-symbols-outlined text-[16px]">error</span>
            <span><?= __t('notfound.tag') ?></span>
        </span>

        <span class="font-display-hero text-6xl sm:text-7xl font-extrabold tracking-tight text-transparent bg-clip-text bg-gradient-to-r from-primary via-secondary to-tertiary leading-none">404</span>

        <h1 id="notfound-heading" class="font-headline-xl text-3xl sm:text-4xl text-on-surface font-bold leading-tight max-w-xl">
            <?= __t('notfound.heading') ?>
        </h1>

        <p class="font-body-md text-body-md text-on-surface-variant max-w-xl leading-relaxed">
            <?= __t('notfound.desc') ?>
        </p>

        <div class="flex flex-wrap items-center justify-center gap-space-md pt-space-xs">
            <a class="inline-flex items-center justify-center gap-space-xs px-space-lg py-space-md rounded-xl bg-tertiary-container text-on-tertiary-container hover:bg-tertiary hover:text-on-tertiary font-headline-sm text-headline-sm font-semibold transition-all duration-200 hover:scale-[1.02] shadow-[0_0_25px_rgba(225,29,72,0.35)]" href="<?= fc_url('home') ?>" data-page-link="home">
                <span class="material-symbols-outlined text-[20px]">home</span>
                <span><?= __t('notfound.home') ?></span>
            </a>
            <a class="inline-flex items-center justify-center gap-space-xs px-space-lg py-space-md rounded-xl bg-surface-container-high hover:bg-surface-bright text-on-surface font-headline-sm text-headline-sm border border-outline-variant/40 transition-all duration-200 hover:scale-[1.02]" href="<?= fc_url('contact') ?>" data-page-link="contact">
                <span class="material-symbols-outlined text-secondary text-[20px]">mail</span>
                <span><?= __t('notfound.contact') ?></span>
            </a>
        </div>

        <div class="w-full max-w-lg mt-space-sm p-space-md rounded-xl bg-surface-container border border-outline-variant/30 text-left rtl:text-right" dir="ltr">
            <span class="font-label-code text-label-badge text-on-surface-variant block mb-2"><?= __t('notfound.available') ?></span>
            <div class="flex flex-wrap gap-space-sm">
                <?php foreach (fc_pages() as $slug => $meta): ?>
                    <a class="font-label-code text-label-code px-space-sm py-1 rounded bg-surface-container-low text-secondary hover:bg-surface-container-high border border-outline-variant/20 transition-colors" href="<?= fc_url($slug) ?>" data-page-link="<?= $slug ?>">
                        <?= fc_url($slug) ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

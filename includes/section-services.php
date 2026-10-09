<?php
/**
 * Services / Value Proposition Section - Obsidian Cyberpunk Vanguard
 */
?>
<section class="w-full bg-surface-container-lowest py-space-3xl" id="services">
    <div class="max-w-7xl mx-auto px-margin-mobile lg:px-margin">
        <!-- Section Header -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md mb-space-2xl">
            <div class="flex flex-col gap-space-xs max-w-2xl">
                <div class="inline-flex items-center gap-space-xs text-secondary font-label-code text-label-code uppercase tracking-wider font-semibold">
                    <span class="material-symbols-outlined text-[16px]">tune</span>
                    <span><?= __t('services.tag') ?></span>
                </div>
                <h1 class="font-headline-xl text-3xl sm:text-4xl text-on-surface font-bold"><?= __t('services.heading') ?></h1>
                <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed"><?= __t('services.desc') ?></p>
            </div>
            <a class="inline-flex items-center gap-space-xs font-headline-sm text-headline-sm text-secondary hover:text-on-surface transition-colors font-semibold shrink-0" href="<?= fc_url('contact') ?>">
                <span><?= __t('services.inquiry_link') ?></span>
                <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
            </a>
        </div>

        <!-- Service Cards Grid (3 Columns) -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-lg">
            <!-- Service 1: Mobile App Dev -->
            <div class="p-space-lg rounded-2xl bg-surface-container flex flex-col justify-between transition-all duration-300 hover:bg-surface-container-high group shadow-lg border border-outline-variant/20 hover:border-primary-container/40">
                <div class="flex flex-col gap-space-md">
                    <div class="w-14 h-14 rounded-xl bg-tertiary-container flex items-center justify-center text-on-tertiary-container shadow-md group-hover:scale-105 transition-transform">
                        <span class="material-symbols-outlined text-[32px]">smartphone</span>
                    </div>
                    <div class="flex flex-col gap-space-xs">
                        <span class="font-label-badge text-label-badge text-secondary uppercase tracking-widest font-semibold"><?= __t('services.s1_badge') ?></span>
                        <h3 class="font-headline-md text-headline-md text-on-surface font-semibold"><?= __t('services.s1_title') ?></h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                            <?= __t('services.s1_desc') ?>
                        </p>
                    </div>
                    <ul class="flex flex-col gap-space-xs font-body-sm text-body-sm text-on-surface pt-space-xs">
                        <li class="flex items-center gap-space-xs">
                            <span class="material-symbols-outlined text-secondary text-[18px]">check_circle</span>
                            <span><?= __t('services.s1_f1') ?></span>
                        </li>
                        <li class="flex items-center gap-space-xs">
                            <span class="material-symbols-outlined text-secondary text-[18px]">check_circle</span>
                            <span><?= __t('services.s1_f2') ?></span>
                        </li>
                        <li class="flex items-center gap-space-xs">
                            <span class="material-symbols-outlined text-secondary text-[18px]">check_circle</span>
                            <span><?= __t('services.s1_f3') ?></span>
                        </li>
                    </ul>
                </div>
                <div class="pt-space-lg flex items-center justify-between border-t border-surface-container-high/60 mt-space-md">
                    <span class="font-label-code text-label-code text-on-surface-variant"><?= __t('services.s1_footer') ?></span>
                    <a class="font-headline-sm text-headline-sm text-secondary group-hover:translate-x-1 transition-transform flex items-center gap-1 font-semibold" href="<?= fc_url('projects') ?>">
                        <span><?= __t('services.s1_action') ?></span>
                        <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                    </a>
                </div>
            </div>

            <!-- Service 2: Responsive & Web Systems -->
            <div class="p-space-lg rounded-2xl bg-surface-container flex flex-col justify-between transition-all duration-300 hover:bg-surface-container-high group shadow-lg border border-outline-variant/20 hover:border-primary/40">
                <div class="flex flex-col gap-space-md">
                    <div class="w-14 h-14 rounded-xl bg-primary-container flex items-center justify-center text-on-primary-container shadow-md group-hover:scale-105 transition-transform">
                        <span class="material-symbols-outlined text-[32px]">laptop_mac</span>
                    </div>
                    <div class="flex flex-col gap-space-xs">
                        <span class="font-label-badge text-label-badge text-primary uppercase tracking-widest font-semibold"><?= __t('services.s2_badge') ?></span>
                        <h3 class="font-headline-md text-headline-md text-on-surface font-semibold"><?= __t('services.s2_title') ?></h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                            <?= __t('services.s2_desc') ?>
                        </p>
                    </div>
                    <ul class="flex flex-col gap-space-xs font-body-sm text-body-sm text-on-surface pt-space-xs">
                        <li class="flex items-center gap-space-xs">
                            <span class="material-symbols-outlined text-secondary text-[18px]">check_circle</span>
                            <span><?= __t('services.s2_f1') ?></span>
                        </li>
                        <li class="flex items-center gap-space-xs">
                            <span class="material-symbols-outlined text-secondary text-[18px]">check_circle</span>
                            <span><?= __t('services.s2_f2') ?></span>
                        </li>
                        <li class="flex items-center gap-space-xs">
                            <span class="material-symbols-outlined text-secondary text-[18px]">check_circle</span>
                            <span><?= __t('services.s2_f3') ?></span>
                        </li>
                    </ul>
                </div>
                <div class="pt-space-lg flex items-center justify-between border-t border-surface-container-high/60 mt-space-md">
                    <span class="font-label-code text-label-code text-on-surface-variant"><?= __t('services.s2_footer') ?></span>
                    <a class="font-headline-sm text-headline-sm text-primary group-hover:translate-x-1 transition-transform flex items-center gap-1 font-semibold" href="<?= fc_url('projects') ?>">
                        <span><?= __t('services.s2_action') ?></span>
                        <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                    </a>
                </div>
            </div>

            <!-- Service 3: Custom Plugins & Tools -->
            <div class="p-space-lg rounded-2xl bg-surface-container flex flex-col justify-between transition-all duration-300 hover:bg-surface-container-high group shadow-lg border border-outline-variant/20 hover:border-secondary-container/40">
                <div class="flex flex-col gap-space-md">
                    <div class="w-14 h-14 rounded-xl bg-secondary-container flex items-center justify-center text-on-secondary shadow-md group-hover:scale-105 transition-transform">
                        <span class="material-symbols-outlined text-[32px]">extension</span>
                    </div>
                    <div class="flex flex-col gap-space-xs">
                        <span class="font-label-badge text-label-badge text-secondary uppercase tracking-widest font-semibold"><?= __t('services.s3_badge') ?></span>
                        <h3 class="font-headline-md text-headline-md text-on-surface font-semibold"><?= __t('services.s3_title') ?></h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                            <?= __t('services.s3_desc') ?>
                        </p>
                    </div>
                    <ul class="flex flex-col gap-space-xs font-body-sm text-body-sm text-on-surface pt-space-xs">
                        <li class="flex items-center gap-space-xs">
                            <span class="material-symbols-outlined text-secondary text-[18px]">check_circle</span>
                            <span><?= __t('services.s3_f1') ?></span>
                        </li>
                        <li class="flex items-center gap-space-xs">
                            <span class="material-symbols-outlined text-secondary text-[18px]">check_circle</span>
                            <span><?= __t('services.s3_f2') ?></span>
                        </li>
                        <li class="flex items-center gap-space-xs">
                            <span class="material-symbols-outlined text-secondary text-[18px]">check_circle</span>
                            <span><?= __t('services.s3_f3') ?></span>
                        </li>
                    </ul>
                </div>
                <div class="pt-space-lg flex items-center justify-between border-t border-surface-container-high/60 mt-space-md">
                    <span class="font-label-code text-label-code text-on-surface-variant"><?= __t('services.s3_footer') ?></span>
                    <a class="font-headline-sm text-headline-sm text-secondary group-hover:translate-x-1 transition-transform flex items-center gap-1 font-semibold" href="<?= fc_url('contact') ?>">
                        <span><?= __t('services.s3_action') ?></span>
                        <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

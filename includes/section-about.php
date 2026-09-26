<?php
/**
 * About Me & Engineering Timeline - Obsidian Cyberpunk Vanguard
 */
?>
<section class="w-full bg-surface-container-lowest py-space-3xl" id="about">
    <div class="max-w-7xl mx-auto px-margin-mobile lg:px-margin">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-start">
            <!-- Story Summary Left (lg:col-span-5) -->
            <div class="lg:col-span-5 flex flex-col gap-space-md">
                <div class="inline-flex items-center gap-space-xs text-secondary font-label-code text-label-code uppercase tracking-wider font-semibold">
                    <span class="material-symbols-outlined text-[16px]">history_edu</span>
                    <span><?= __t('about.tag') ?></span>
                </div>
                <h2 class="font-headline-xl text-3xl sm:text-4xl text-on-surface font-bold leading-tight"><?= __t('about.heading') ?></h2>
                <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                    <?= __t('about.p1') ?>
                </p>
                <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                    <?= __t('about.p2') ?>
                </p>

                <!-- Official License Accreditation Badge Card -->
                <div class="p-space-md rounded-xl bg-surface-container-high border border-outline-variant/30 flex flex-col gap-space-xs mt-space-xs shadow-md">
                    <div class="flex items-center gap-space-xs">
                        <span class="material-symbols-outlined text-secondary text-[22px]">verified</span>
                        <span class="font-headline-sm text-headline-sm text-on-surface font-semibold"><?= __t('about.badge_title') ?></span>
                    </div>
                    <p class="font-body-sm text-body-sm text-on-surface-variant">
                        <?= __t('about.badge_body') ?>
                    </p>
                    <div class="flex items-center justify-between pt-space-xs border-t border-surface-container/60 mt-1">
                        <span class="font-label-code text-label-code text-secondary bg-surface-container px-2.5 py-1 rounded font-semibold border border-outline-variant/20"><?= __t('about.badge_license') ?></span>
                        <span class="font-label-badge text-label-badge text-on-surface-variant"><?= __t('about.badge_contractor') ?></span>
                    </div>
                </div>
            </div>

            <!-- 4 Narrative Milestone Cards Grid (lg:col-span-7) -->
            <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-space-md">
                <!-- Milestone 1 -->
                <div class="p-space-lg rounded-2xl bg-surface-container flex flex-col gap-space-sm shadow-md border border-outline-variant/20 hover:border-primary-container/40 transition-all">
                    <div class="w-10 h-10 rounded-lg bg-primary-container/20 flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined text-[20px]">school</span>
                    </div>
                    <span class="font-label-code text-label-badge text-primary uppercase font-semibold"><?= __t('about.m1_tag') ?></span>
                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold"><?= __t('about.m1_title') ?></h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                        <?= __t('about.m1_desc') ?>
                    </p>
                </div>

                <!-- Milestone 2 -->
                <div class="p-space-lg rounded-2xl bg-surface-container flex flex-col gap-space-sm shadow-md border border-outline-variant/20 hover:border-secondary/40 transition-all">
                    <div class="w-10 h-10 rounded-lg bg-secondary/15 flex items-center justify-center text-secondary">
                        <span class="material-symbols-outlined text-[20px]">android</span>
                    </div>
                    <span class="font-label-code text-label-badge text-secondary uppercase font-semibold"><?= __t('about.m2_tag') ?></span>
                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold"><?= __t('about.m2_title') ?></h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                        <?= __t('about.m2_desc') ?>
                    </p>
                </div>

                <!-- Milestone 3 -->
                <div class="p-space-lg rounded-2xl bg-surface-container flex flex-col gap-space-sm shadow-md border border-outline-variant/20 hover:border-tertiary/40 transition-all">
                    <div class="w-10 h-10 rounded-lg bg-tertiary-container/20 flex items-center justify-center text-tertiary">
                        <span class="material-symbols-outlined text-[20px]">flight</span>
                    </div>
                    <span class="font-label-code text-label-badge text-tertiary uppercase font-semibold"><?= __t('about.m3_tag') ?></span>
                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold"><?= __t('about.m3_title') ?></h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                        <?= __t('about.m3_desc') ?>
                    </p>
                </div>

                <!-- Milestone 4 -->
                <div class="p-space-lg rounded-2xl bg-surface-container flex flex-col gap-space-sm shadow-md border border-outline-variant/20 hover:border-primary/40 transition-all">
                    <div class="w-10 h-10 rounded-lg bg-surface-container-highest flex items-center justify-center text-on-surface">
                        <span class="material-symbols-outlined text-[20px]">code_blocks</span>
                    </div>
                    <span class="font-label-code text-label-badge text-on-surface uppercase font-semibold"><?= __t('about.m4_tag') ?></span>
                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold"><?= __t('about.m4_title') ?></h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                        <?= __t('about.m4_desc') ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
/**
 * Hero Section - Obsidian Cyberpunk Vanguard
 */
?>
<section class="relative w-full overflow-hidden bg-surface pt-space-xl pb-space-3xl">
    <!-- Ambient Glassmorphic Bioluminescent Glows -->
    <div class="pointer-events-none absolute -top-40 -left-40 h-[500px] w-[500px] rounded-full bg-primary-container/20 blur-[130px]"></div>
    <div class="pointer-events-none absolute top-1/2 -right-40 h-[450px] w-[450px] rounded-full bg-secondary/15 blur-[140px]"></div>

    <div class="max-w-7xl mx-auto px-margin-mobile lg:px-margin relative z-10">
        <!-- Status Badges Chips -->
        <div class="flex flex-wrap items-center gap-space-sm mb-space-lg">
            <div class="inline-flex items-center gap-space-xs px-space-md py-1.5 rounded-full bg-surface-container-high text-secondary border border-outline-variant/30">
                <span class="relative flex h-2.5 w-2.5">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-secondary opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-secondary"></span>
                </span>
                <span class="font-label-badge text-label-badge uppercase tracking-wider"><?= __t('hero.status_chip') ?></span>
            </div>
            <div class="inline-flex items-center gap-space-xs px-space-md py-1.5 rounded-full bg-surface-container text-on-surface-variant font-label-code text-label-code border border-outline-variant/30">
                <span class="material-symbols-outlined text-[16px] text-secondary">verified_user</span>
                <span><?= __t('hero.verified_chip') ?></span>
            </div>
        </div>

        <!-- 12-Column Grid Split: Hero Text & Architectural Terminal -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-center">
            <!-- Hero Text Left (lg:col-span-7) -->
            <div class="lg:col-span-7 flex flex-col gap-space-md">
                <div class="flex flex-col">
                    <span class="font-label-code text-label-code text-secondary uppercase tracking-widest mb-space-xs font-semibold"><?= __t('hero.role_title') ?></span>
                    <h1 class="font-display-hero text-4xl sm:text-5xl lg:text-6xl text-on-surface font-extrabold tracking-tight leading-[1.12]">
                        <?= __t('hero.title_line1') ?> <br/>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary via-secondary to-tertiary"><?= __t('hero.title_gradient') ?></span> <br/>
                        <?= __t('hero.title_line2') ?>
                    </h1>
                </div>

                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl leading-relaxed">
                    <?= __t('hero.bio') ?>
                </p>

                <!-- High-Conversion CTAs -->
                <div class="flex flex-wrap items-center gap-space-md pt-space-xs">
                    <a class="inline-flex items-center justify-center gap-space-xs px-space-lg py-space-md rounded-xl bg-tertiary-container text-on-tertiary-container hover:bg-tertiary hover:text-on-tertiary font-headline-sm text-headline-sm font-semibold transition-all duration-200 hover:scale-[1.02] shadow-[0_0_25px_rgba(225,29,72,0.35)]" href="<?= fc_url('projects') ?>">
                        <span><?= __t('hero.cta_featured') ?></span>
                        <span class="material-symbols-outlined text-[20px]">arrow_downward</span>
                    </a>
                    <a class="inline-flex items-center justify-center gap-space-xs px-space-lg py-space-md rounded-xl bg-surface-container-high hover:bg-surface-bright text-on-surface font-headline-sm text-headline-sm border border-outline-variant/40 transition-all duration-200 hover:scale-[1.02]" href="<?= fc_url('contact') ?>">
                        <span class="material-symbols-outlined text-secondary text-[20px]">terminal</span>
                        <span><?= __t('hero.cta_consult') ?></span>
                    </a>
                </div>

                <!-- Proof Badges -->
                <div class="flex flex-wrap items-center gap-space-lg pt-space-sm">
                    <div class="flex items-center gap-space-xs">
                        <span class="material-symbols-outlined text-secondary text-[20px]">verified</span>
                        <span class="font-label-code text-label-code text-on-surface-variant"><?= __t('hero.proof_tuwaiq') ?></span>
                    </div>
                    <div class="flex items-center gap-space-xs">
                        <span class="material-symbols-outlined text-primary text-[20px]">cloud_done</span>
                        <span class="font-label-code text-label-code text-on-surface-variant"><?= __t('hero.proof_console') ?></span>
                    </div>
                </div>
            </div>

            <!-- Hero Visual: Glass Architecture Terminal Frame (lg:col-span-5) -->
            <div class="lg:col-span-5 relative">
                <div class="relative w-full rounded-2xl bg-surface-container-low border border-outline-variant/30 p-space-md shadow-2xl overflow-hidden glass-card">
                    <!-- Terminal Window Header -->
                    <div class="flex items-center justify-between pb-space-sm mb-space-sm bg-surface-container-highest/40 -mx-space-md -mt-space-md px-space-md pt-space-sm border-b border-surface-container-high">
                        <div class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-full bg-error"></span>
                            <span class="w-3 h-3 rounded-full bg-secondary-container"></span>
                            <span class="w-3 h-3 rounded-full bg-secondary"></span>
                        </div>
                        <span class="font-label-code text-label-badge text-on-surface-variant" dir="ltr"><?= __t('hero.terminal_host') ?></span>
                        <span class="font-label-code text-label-badge text-secondary font-semibold"><?= __t('hero.terminal_status') ?></span>
                    </div>

                    <!-- Terminal Core Modules -->
                    <div class="flex flex-col gap-space-sm">
                        <!-- Card 1 -->
                        <div class="p-space-sm rounded-lg bg-surface-container flex items-center justify-between border border-outline-variant/20">
                            <div class="flex items-center gap-space-sm">
                                <div class="w-10 h-10 rounded-lg bg-primary-container/20 flex items-center justify-center text-primary">
                                    <span class="material-symbols-outlined text-[24px]">android</span>
                                </div>
                                <div>
                                    <div class="font-headline-sm text-headline-sm text-on-surface font-semibold"><?= __t('hero.terminal_card1_title') ?></div>
                                    <div class="font-label-code text-label-badge text-on-surface-variant"><?= __t('hero.terminal_card1_sub') ?></div>
                                </div>
                            </div>
                            <span class="font-label-code text-label-badge text-secondary bg-surface-container-high px-2 py-0.5 rounded font-semibold"><?= __t('hero.terminal_card1_tag') ?></span>
                        </div>

                        <!-- Card 2 -->
                        <div class="p-space-sm rounded-lg bg-surface-container flex items-center justify-between border border-outline-variant/20">
                            <div class="flex items-center gap-space-sm">
                                <div class="w-10 h-10 rounded-lg bg-secondary/10 flex items-center justify-center text-secondary">
                                    <span class="material-symbols-outlined text-[24px]">flight_takeoff</span>
                                </div>
                                <div>
                                    <div class="font-headline-sm text-headline-sm text-on-surface font-semibold"><?= __t('hero.terminal_card2_title') ?></div>
                                    <div class="font-label-code text-label-badge text-on-surface-variant"><?= __t('hero.terminal_card2_sub') ?></div>
                                </div>
                            </div>
                            <span class="font-label-code text-label-badge text-primary bg-surface-container-high px-2 py-0.5 rounded font-semibold"><?= __t('hero.terminal_card2_tag') ?></span>
                        </div>

                        <!-- Sparkline Performance Box -->
                        <div class="p-space-md rounded-lg bg-surface-container-lowest flex flex-col gap-space-xs mt-space-xs border border-outline-variant/20">
                            <div class="flex justify-between items-center">
                                <span class="font-label-code text-label-badge text-on-surface-variant uppercase"><?= __t('hero.terminal_uptime_title') ?></span>
                                <span class="font-label-code text-label-badge text-secondary font-bold"><?= __t('hero.terminal_uptime_val') ?></span>
                            </div>
                            <!-- Inline SVG Sparkline -->
                            <svg class="w-full h-12 text-secondary fill-none" preserveAspectRatio="none" viewBox="0 0 300 48">
                                <path d="M0,36 Q30,12 60,28 T120,18 T180,30 T240,10 T300,16" stroke="currentColor" stroke-linecap="round" stroke-width="2.5"></path>
                                <path d="M0,36 Q30,12 60,28 T120,18 T180,30 T240,10 T300,16 L300,48 L0,48 Z" fill="currentColor" fill-opacity="0.08"></path>
                            </svg>
                            <div class="flex justify-between text-on-surface-variant font-label-code text-label-badge pt-1">
                                <span><?= __t('hero.terminal_uptime_sub1') ?></span>
                                <span><?= __t('hero.terminal_uptime_sub2') ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Metrics & Proof Counter Ribbon -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-space-md mt-space-2xl pt-space-lg border-t border-surface-container-high">
            <!-- Metric 1 -->
            <div class="flex flex-col gap-1 p-space-sm">
                <span class="font-display-hero text-3xl sm:text-4xl lg:text-5xl font-extrabold text-on-surface leading-none"><?= __t('stats.stat1_val') ?></span>
                <span class="font-label-badge text-label-badge text-secondary uppercase tracking-wider font-semibold"><?= __t('stats.stat1_label') ?></span>
                <span class="font-body-sm text-body-sm text-on-surface-variant"><?= __t('stats.stat1_sub') ?></span>
            </div>

            <!-- Metric 2 -->
            <div class="flex flex-col gap-1 p-space-sm">
                <span class="font-display-hero text-3xl sm:text-4xl lg:text-5xl font-extrabold text-on-surface leading-none"><?= __t('stats.stat2_val') ?></span>
                <span class="font-label-badge text-label-badge text-primary uppercase tracking-wider font-semibold"><?= __t('stats.stat2_label') ?></span>
                <span class="font-body-sm text-body-sm text-on-surface-variant"><?= __t('stats.stat2_sub') ?></span>
            </div>

            <!-- Metric 3 -->
            <div class="flex flex-col gap-1 p-space-sm">
                <span class="font-display-hero text-3xl sm:text-4xl lg:text-5xl font-extrabold text-on-surface leading-none"><?= __t('stats.stat3_val') ?></span>
                <span class="font-label-badge text-label-badge text-tertiary uppercase tracking-wider font-semibold"><?= __t('stats.stat3_label') ?></span>
                <span class="font-body-sm text-body-sm text-on-surface-variant"><?= __t('stats.stat3_sub') ?></span>
            </div>

            <!-- Metric 4 -->
            <div class="flex flex-col gap-1 p-space-sm">
                <span class="font-display-hero text-3xl sm:text-4xl lg:text-5xl font-extrabold text-on-surface leading-none"><?= __t('stats.stat4_val') ?></span>
                <span class="font-label-badge text-label-badge text-secondary uppercase tracking-wider font-semibold"><?= __t('stats.stat4_label') ?></span>
                <span class="font-body-sm text-body-sm text-on-surface-variant"><?= __t('stats.stat4_sub') ?></span>
            </div>
        </div>
    </div>
</section>

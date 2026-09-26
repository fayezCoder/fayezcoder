<?php
/**
 * Engineering Showcase Section - Obsidian Cyberpunk Vanguard
 */
?>
<section class="w-full bg-surface-container-lowest py-space-3xl relative" id="projects">
    <div class="max-w-7xl mx-auto px-margin-mobile lg:px-margin">
        <!-- Section Header with Category Filter Controls -->
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-space-2xl gap-space-md border-b border-surface-container-high pb-space-lg">
            <div>
                <div class="inline-flex items-center gap-space-xs text-secondary font-label-code text-label-code uppercase tracking-wider font-semibold">
                    <span class="material-symbols-outlined text-[16px]">terminal</span>
                    <span><?= __t('portfolio.tag') ?></span>
                </div>
                <h2 class="font-headline-xl text-3xl sm:text-4xl text-on-surface font-bold mt-space-xs"><?= __t('portfolio.heading') ?></h2>
                <p class="font-body-md text-body-md text-on-surface-variant mt-1"><?= __t('portfolio.desc') ?></p>
            </div>

            <!-- Dynamic Category Filter Pills -->
            <div class="flex flex-wrap items-center gap-1.5 p-1 rounded-xl bg-surface-container-low border border-outline-variant/30">
                <button class="filter-btn px-space-md py-1.5 rounded-lg font-headline-sm text-xs font-semibold transition-all bg-primary-container text-on-primary-container shadow-sm" data-filter="all">
                    <?= __t('portfolio.filter_all') ?>
                </button>
                <button class="filter-btn px-space-md py-1.5 rounded-lg font-headline-sm text-xs font-semibold transition-all text-on-surface-variant hover:text-on-surface" data-filter="mobile">
                    <?= __t('portfolio.filter_mobile') ?>
                </button>
                <button class="filter-btn px-space-md py-1.5 rounded-lg font-headline-sm text-xs font-semibold transition-all text-on-surface-variant hover:text-on-surface" data-filter="aviation">
                    <?= __t('portfolio.filter_aviation') ?>
                </button>
                <button class="filter-btn px-space-md py-1.5 rounded-lg font-headline-sm text-xs font-semibold transition-all text-on-surface-variant hover:text-on-surface" data-filter="web">
                    <?= __t('portfolio.filter_web') ?>
                </button>
            </div>
        </div>


        <!-- 6 Showcase Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-space-lg" id="portfolio-grid">
            <?php foreach ($projects as $key => $proj): 
                $title = $proj['title'][CURRENT_LANG] ?? $proj['title']['en'];
                $summary = $proj['summary'][CURRENT_LANG] ?? $proj['summary']['en'];
                $badge = $proj['category_badge'][CURRENT_LANG] ?? $proj['category_badge']['en'];
                $client = $proj['client'][CURRENT_LANG] ?? $proj['client']['en'];
                $metaPill = $proj['meta_pill']['text'][CURRENT_LANG] ?? $proj['meta_pill']['text']['en'];
                $extraMeta = $proj['extra_meta'][CURRENT_LANG] ?? $proj['extra_meta']['en'];
                $accent = $proj['accent'] ?? 'secondary';
            ?>
            <div class="project-card rounded-2xl bg-surface-container-low overflow-hidden flex flex-col justify-between transition-all duration-300 hover:shadow-2xl hover:scale-[1.01] group border border-outline-variant/20 hover:border-<?= $accent ?>/50" data-category="<?= htmlspecialchars($proj['category'], ENT_QUOTES) ?>">
                <div class="flex flex-col">
                    <!-- Upper Viewport / Device frame preview -->
                    <div class="relative w-full h-56 bg-surface-container-high overflow-hidden flex items-center justify-center p-space-md">
                        <div class="absolute inset-0 bg-gradient-to-tr from-surface-dim/90 via-surface-container-highest to-<?= $accent ?>/20"></div>
                        <img class="relative z-10 w-full h-full object-cover rounded-lg shadow-lg group-hover:scale-105 transition-transform duration-500" src="<?= htmlspecialchars($proj['image']) ?>" alt="<?= htmlspecialchars($title) ?>" loading="lazy" />
                        <span class="absolute top-3 <?= IS_RTL ? 'right-3' : 'left-3' ?> z-20 font-label-badge text-label-badge bg-surface-dim/80 backdrop-blur-md text-<?= $accent ?> px-2.5 py-1 rounded border border-<?= $accent ?>/30 font-semibold">
                            <?= htmlspecialchars($badge) ?>
                        </span>
                    </div>

                    <!-- Card Body Description -->
                    <div class="p-space-lg flex flex-col gap-space-sm">
                        <div class="flex items-center justify-between">
                            <span class="font-label-code text-label-badge text-on-surface-variant font-medium">
                                <?= __t('portfolio.client_label') ?> <?= htmlspecialchars($client) ?>
                            </span>
                            <span class="inline-flex items-center gap-1 font-label-code text-label-badge text-<?= $accent ?> font-medium">
                                <span class="material-symbols-outlined text-[14px]"><?= htmlspecialchars($proj['meta_pill']['icon']) ?></span>
                                <span><?= htmlspecialchars($metaPill) ?></span>
                            </span>
                        </div>

                        <h3 class="font-headline-md text-xl text-on-surface font-semibold group-hover:text-<?= $accent ?> transition-colors">
                            <?= htmlspecialchars($title) ?>
                        </h3>

                        <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed line-clamp-3">
                            <?= htmlspecialchars($summary) ?>
                        </p>

                        <!-- Tech Stack Tags -->
                        <div class="flex flex-wrap gap-1.5 pt-space-xs">
                            <?php foreach ($proj['tech_stack'] as $t): ?>
                                <span class="font-label-code text-label-badge px-2 py-0.5 rounded bg-surface-container text-on-surface-variant border border-outline-variant/30">
                                    <?= htmlspecialchars($t) ?>
                                </span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <!-- Card Footer Actions -->
                <div class="p-space-lg pt-0 flex items-center justify-between border-t border-surface-container-high/40 mt-space-sm pt-space-md">
                    <?php if (!empty($proj['play_store'])): ?>
                        <a class="inline-flex items-center gap-space-xs font-headline-sm text-headline-sm text-on-surface hover:text-<?= $accent ?> transition-colors font-semibold" href="<?= htmlspecialchars($proj['play_store']) ?>" target="_blank" rel="noopener noreferrer">
                            <span class="material-symbols-outlined text-[18px]">play_arrow</span>
                            <span><?= __t('portfolio.view_play') ?></span>
                        </a>
                    <?php else: ?>
                        <a class="inline-flex items-center gap-space-xs font-headline-sm text-headline-sm text-<?= $accent ?> hover:text-on-surface transition-colors font-semibold" href="<?= htmlspecialchars($proj['live_url']) ?>" target="_blank" rel="noopener noreferrer">
                            <span class="material-symbols-outlined text-[18px]">open_in_new</span>
                            <span><?= __t('portfolio.view_web') ?></span>
                        </a>
                    <?php endif; ?>
                    <span class="font-label-badge text-label-badge text-on-surface-variant"><?= htmlspecialchars($extraMeta) ?></span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

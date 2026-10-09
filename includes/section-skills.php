<?php
/**
 * Skills & Tech Stack Section - Obsidian Cyberpunk Vanguard
 */
?>
<section class="w-full bg-surface py-space-3xl relative border-t border-surface-container-high/40" id="skills">
    <div class="max-w-7xl mx-auto px-margin-mobile lg:px-margin">
        <!-- Section Header -->
        <div class="flex flex-col items-center text-center max-w-2xl mx-auto mb-space-2xl">
            <div class="inline-flex items-center gap-space-xs text-secondary font-label-code text-label-code uppercase tracking-wider mb-space-xs font-semibold">
                <span class="material-symbols-outlined text-[16px]">data_object</span>
                <span><?= __t('skills.tag') ?></span>
            </div>
            <h1 class="font-headline-xl text-3xl sm:text-4xl text-on-surface font-bold"><?= __t('skills.heading') ?></h1>
            <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed"><?= __t('skills.desc') ?></p>
        </div>

        <!-- 12 Tech Stack Cards Grid (6 Columns on lg) -->
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-space-md">
            <!-- Tech 1: Flutter -->
            <div class="p-space-md rounded-xl bg-surface-container flex flex-col items-center gap-space-xs text-center hover:bg-surface-container-high border border-outline-variant/20 hover:border-secondary/50 transition-all group">
                <span class="material-symbols-outlined text-secondary text-[28px] group-hover:scale-110 transition-transform">flutter</span>
                <span class="font-headline-sm text-headline-sm text-on-surface font-semibold">Flutter</span>
                <span class="font-label-code text-label-badge text-on-surface-variant">Cross-Platform UI</span>
            </div>

            <!-- Tech 2: Dart -->
            <div class="p-space-md rounded-xl bg-surface-container flex flex-col items-center gap-space-xs text-center hover:bg-surface-container-high border border-outline-variant/20 hover:border-primary/50 transition-all group">
                <span class="material-symbols-outlined text-primary text-[28px] group-hover:scale-110 transition-transform">code</span>
                <span class="font-headline-sm text-headline-sm text-on-surface font-semibold">Dart</span>
                <span class="font-label-code text-label-badge text-on-surface-variant">Async & Reactive</span>
            </div>

            <!-- Tech 3: Android SDK -->
            <div class="p-space-md rounded-xl bg-surface-container flex flex-col items-center gap-space-xs text-center hover:bg-surface-container-high border border-outline-variant/20 hover:border-secondary/50 transition-all group">
                <span class="material-symbols-outlined text-secondary text-[28px] group-hover:scale-110 transition-transform">android</span>
                <span class="font-headline-sm text-headline-sm text-on-surface font-semibold">Android SDK</span>
                <span class="font-label-code text-label-badge text-on-surface-variant">Native APIs</span>
            </div>

            <!-- Tech 4: SQLite / SQFlite -->
            <div class="p-space-md rounded-xl bg-surface-container flex flex-col items-center gap-space-xs text-center hover:bg-surface-container-high border border-outline-variant/20 hover:border-tertiary/50 transition-all group">
                <span class="material-symbols-outlined text-tertiary text-[28px] group-hover:scale-110 transition-transform">storage</span>
                <span class="font-headline-sm text-headline-sm text-on-surface font-semibold">SQLite / SQFlite</span>
                <span class="font-label-code text-label-badge text-on-surface-variant">Offline Storage</span>
            </div>

            <!-- Tech 5: Local NoSQL -->
            <div class="p-space-md rounded-xl bg-surface-container flex flex-col items-center gap-space-xs text-center hover:bg-surface-container-high border border-outline-variant/20 hover:border-primary/50 transition-all group">
                <span class="material-symbols-outlined text-primary text-[28px] group-hover:scale-110 transition-transform">database</span>
                <span class="font-headline-sm text-headline-sm text-on-surface font-semibold">Local NoSQL</span>
                <span class="font-label-code text-label-badge text-on-surface-variant">Document DB</span>
            </div>

            <!-- Tech 6: HTML5 / CSS3 -->
            <div class="p-space-md rounded-xl bg-surface-container flex flex-col items-center gap-space-xs text-center hover:bg-surface-container-high border border-outline-variant/20 hover:border-secondary/50 transition-all group">
                <span class="material-symbols-outlined text-secondary text-[28px] group-hover:scale-110 transition-transform">html</span>
                <span class="font-headline-sm text-headline-sm text-on-surface font-semibold">HTML5 / CSS3</span>
                <span class="font-label-code text-label-badge text-on-surface-variant">Fluid Layouts</span>
            </div>

            <!-- Tech 7: JavaScript ES6+ -->
            <div class="p-space-md rounded-xl bg-surface-container flex flex-col items-center gap-space-xs text-center hover:bg-surface-container-high border border-outline-variant/20 hover:border-secondary/50 transition-all group">
                <span class="material-symbols-outlined text-secondary text-[28px] group-hover:scale-110 transition-transform">javascript</span>
                <span class="font-headline-sm text-headline-sm text-on-surface font-semibold">JavaScript</span>
                <span class="font-label-code text-label-badge text-on-surface-variant">Modern ES6+</span>
            </div>

            <!-- Tech 8: PHP Backend -->
            <div class="p-space-md rounded-xl bg-surface-container flex flex-col items-center gap-space-xs text-center hover:bg-surface-container-high border border-outline-variant/20 hover:border-tertiary/50 transition-all group">
                <span class="material-symbols-outlined text-tertiary text-[28px] group-hover:scale-110 transition-transform">php</span>
                <span class="font-headline-sm text-headline-sm text-on-surface font-semibold">PHP Backend</span>
                <span class="font-label-code text-label-badge text-on-surface-variant">REST & APIs</span>
            </div>

            <!-- Tech 9: MySQL -->
            <div class="p-space-md rounded-xl bg-surface-container flex flex-col items-center gap-space-xs text-center hover:bg-surface-container-high border border-outline-variant/20 hover:border-secondary/50 transition-all group">
                <span class="material-symbols-outlined text-secondary text-[28px] group-hover:scale-110 transition-transform">schema</span>
                <span class="font-headline-sm text-headline-sm text-on-surface font-semibold">MySQL</span>
                <span class="font-label-code text-label-badge text-on-surface-variant">Relational Data</span>
            </div>

            <!-- Tech 10: WordPress Plugins -->
            <div class="p-space-md rounded-xl bg-surface-container flex flex-col items-center gap-space-xs text-center hover:bg-surface-container-high border border-outline-variant/20 hover:border-primary/50 transition-all group">
                <span class="material-symbols-outlined text-primary text-[28px] group-hover:scale-110 transition-transform">extension</span>
                <span class="font-headline-sm text-headline-sm text-on-surface font-semibold">WordPress Plugins</span>
                <span class="font-label-code text-label-badge text-on-surface-variant">Custom Hooks</span>
            </div>

            <!-- Tech 11: Git & GitHub -->
            <div class="p-space-md rounded-xl bg-surface-container flex flex-col items-center gap-space-xs text-center hover:bg-surface-container-high border border-outline-variant/20 hover:border-secondary/50 transition-all group">
                <span class="material-symbols-outlined text-secondary text-[28px] group-hover:scale-110 transition-transform">terminal</span>
                <span class="font-headline-sm text-headline-sm text-on-surface font-semibold">Git & GitHub</span>
                <span class="font-label-code text-label-badge text-on-surface-variant">Version Control</span>
            </div>

            <!-- Tech 12: Security & RBAC -->
            <div class="p-space-md rounded-xl bg-surface-container flex flex-col items-center gap-space-xs text-center hover:bg-surface-container-high border border-outline-variant/20 hover:border-tertiary/50 transition-all group">
                <span class="material-symbols-outlined text-tertiary text-[28px] group-hover:scale-110 transition-transform">verified_user</span>
                <span class="font-headline-sm text-headline-sm text-on-surface font-semibold">Security & RBAC</span>
                <span class="font-label-code text-label-badge text-on-surface-variant">Role Permissions</span>
            </div>
        </div>
    </div>
</section>

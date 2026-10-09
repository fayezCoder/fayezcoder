<?php
/**
 * Footer - Obsidian Cyberpunk Vanguard
 */
?>
<footer class="w-full bg-surface-container-lowest border-t border-surface-container-high/60">
    <div class="max-w-7xl mx-auto px-margin-mobile lg:px-margin py-space-3xl">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-space-xl items-start">
            <!-- Col 1: Brand & Bio (md:col-span-5) -->
            <div class="md:col-span-5 flex flex-col gap-space-md">
                <div class="flex items-center gap-space-sm">
                    <span class="brand-mark shrink-0" aria-hidden="true"></span>
                    <span class="font-headline-md text-headline-md text-on-surface font-bold"><?= __t('nav.brand') ?></span>
                </div>
                <p class="font-body-sm text-body-sm text-on-surface-variant max-w-sm leading-relaxed">
                    <?= __t('footer.brand_desc') ?>
                </p>
                <div class="flex items-center gap-space-sm">
                    <a aria-label="GitHub Profile" class="w-10 h-10 rounded-lg bg-surface-container flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-secondary transition-colors border border-outline-variant/20" href="https://github.com/fayezCoder" rel="noopener noreferrer" target="_blank">
                        <span class="material-symbols-outlined text-[20px]">terminal</span>
                    </a>
                    <a aria-label="X Platform Profile" class="w-10 h-10 rounded-lg bg-surface-container flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-primary transition-colors border border-outline-variant/20" href="https://x.com/faizCoder" rel="noopener noreferrer" target="_blank">
                        <span class="material-symbols-outlined text-[20px]">tag</span>
                    </a>
                    <a aria-label="TikTok Profile" class="w-10 h-10 rounded-lg bg-surface-container flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-tertiary transition-colors border border-outline-variant/20" href="https://www.tiktok.com/@fayezdevs" rel="noopener noreferrer" target="_blank">
                        <span class="material-symbols-outlined text-[20px]">smart_display</span>
                    </a>
                    <a aria-label="WhatsApp Direct Contact" class="w-10 h-10 rounded-lg bg-surface-container flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-secondary transition-colors border border-outline-variant/20" href="<?= WHATSAPP_LINK ?>" rel="noopener noreferrer" target="_blank">
                        <i class="bi bi-whatsapp text-[18px]"></i>
                    </a>
                </div>
            </div>

            <!-- Col 2: Direct Contact (md:col-span-3) -->
            <div class="md:col-span-3 flex flex-col gap-space-sm">
                <span class="font-label-badge text-label-badge text-on-surface uppercase tracking-wider font-semibold"><?= __t('footer.direct_contact_title') ?></span>
                <div class="flex flex-col gap-1.5 font-body-sm text-body-sm text-on-surface-variant">
                    <a href="mailto:<?= __t('footer.direct_email') ?>" class="hover:text-primary transition-colors"><?= __t('footer.direct_email') ?></a>
                    <a href="<?= WHATSAPP_LINK ?>" class="inline-flex items-center gap-1.5 hover:text-secondary transition-colors" rel="noopener noreferrer" target="_blank">
                        <i class="bi bi-whatsapp text-[14px] text-secondary"></i>
                        <span dir="ltr"><?= WHATSAPP_DISPLAY ?></span>
                    </a>
                    <span><?= __t('footer.direct_location') ?></span>
                    <span class="text-secondary inline-flex items-center gap-1 font-label-code text-xs pt-1">
                        <span class="material-symbols-outlined text-[14px]">bolt</span>
                        <span><?= __t('footer.direct_response') ?></span>
                    </span>
                </div>
            </div>

            <!-- Col 3: Official Accreditation License Seal (md:col-span-4) -->
            <div class="md:col-span-4 p-space-md rounded-xl bg-surface-container flex flex-col gap-space-xs border border-outline-variant/30">
                <div class="flex items-center gap-space-xs text-secondary font-headline-sm text-headline-sm font-semibold">
                    <span class="material-symbols-outlined text-[20px]">verified</span>
                    <span><?= __t('footer.license_title') ?></span>
                </div>
                <p class="font-body-sm text-xs text-on-surface-variant">
                    <?= __t('footer.license_mhrsd') ?>
                </p>
                <div class="flex items-center justify-between pt-space-xs border-t border-surface-container-high/60 mt-1">
                    <span class="font-label-code text-xs text-secondary bg-surface-container-low px-2 py-0.5 rounded font-semibold border border-outline-variant/20"><?= __t('footer.license_number') ?></span>
                    <span class="font-label-badge text-xs text-on-surface-variant"><?= __t('footer.license_type') ?></span>
                </div>
            </div>
        </div>

        <!-- Bottom Copyright -->
        <div class="pt-space-2xl mt-space-2xl border-t border-surface-container-high flex flex-col sm:flex-row items-center justify-between gap-space-md font-label-code text-label-badge text-on-surface-variant">
            <span><?= __t('footer.rights') ?></span>
            <span>v<?= ASSET_VERSION ?> • <?= __t('footer.version') ?></span>
        </div>
    </div>
</footer>

<!-- Interactive Scripts -->
<script src="<?= fc_asset('assets/js/modern.js') ?>"></script>
</body>
</html>

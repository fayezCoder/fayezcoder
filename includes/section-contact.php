<?php
/**
 * Interactive Conversion Contact Section - Obsidian Cyberpunk Vanguard
 */
?>
<section class="w-full bg-surface-container-lowest py-space-3xl relative" id="contact">
    <div class="max-w-7xl mx-auto px-margin-mobile lg:px-margin">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-start">
            <!-- Left Column: Contact Context & Social Links (lg:col-span-5) -->
            <div class="lg:col-span-5 flex flex-col gap-space-md">
                <div class="inline-flex items-center gap-space-xs text-secondary font-label-code text-label-code uppercase tracking-wider font-semibold">
                    <span class="material-symbols-outlined text-[16px]">mail</span>
                    <span><?= __t('contact.tag') ?></span>
                </div>
                <h2 class="font-headline-xl text-3xl sm:text-4xl text-on-surface font-bold leading-tight"><?= __t('contact.heading') ?></h2>
                <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                    <?= __t('contact.desc') ?>
                </p>

                <!-- Location & Typical Response Speed -->
                <div class="flex flex-col gap-space-sm pt-space-xs">
                    <div class="flex items-center gap-space-sm">
                        <div class="w-10 h-10 rounded-lg bg-surface-container flex items-center justify-center text-secondary border border-outline-variant/30">
                            <span class="material-symbols-outlined text-[20px]">location_on</span>
                        </div>
                        <div>
                            <div class="font-headline-sm text-headline-sm text-on-surface font-semibold"><?= __t('contact.location_title') ?></div>
                            <div class="font-body-sm text-body-sm text-on-surface-variant"><?= __t('contact.location_sub') ?></div>
                        </div>
                    </div>

                    <div class="flex items-center gap-space-sm">
                        <div class="w-10 h-10 rounded-lg bg-surface-container flex items-center justify-center text-primary border border-outline-variant/30">
                            <span class="material-symbols-outlined text-[20px]">schedule</span>
                        </div>
                        <div>
                            <div class="font-headline-sm text-headline-sm text-on-surface font-semibold"><?= __t('contact.response_title') ?></div>
                            <div class="font-body-sm text-body-sm text-on-surface-variant"><?= __t('contact.response_sub') ?></div>
                        </div>
                    </div>
                </div>

                <!-- Developer Channels -->
                <div class="pt-space-md">
                    <span class="font-label-badge text-label-badge text-on-surface-variant uppercase tracking-wider block mb-space-xs font-semibold"><?= __t('contact.channels_title') ?></span>
                    <div class="flex flex-wrap items-center gap-space-sm">
                        <a class="inline-flex items-center gap-space-xs px-space-md py-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface text-body-sm border border-outline-variant/20 hover:border-secondary transition-colors" href="https://github.com/fayezCoder" target="_blank" rel="noopener noreferrer">
                            <span class="material-symbols-outlined text-[18px] text-secondary">terminal</span>
                            <span dir="ltr">github.com/fayezCoder</span>
                        </a>
                        <a class="inline-flex items-center gap-space-xs px-space-md py-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface text-body-sm border border-outline-variant/20 hover:border-primary transition-colors" href="https://x.com/faizCoder" target="_blank" rel="noopener noreferrer">
                            <span class="material-symbols-outlined text-[18px] text-primary">tag</span>
                            <span dir="ltr">@faizCoder</span>
                        </a>
                        <a class="inline-flex items-center gap-space-xs px-space-md py-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface text-body-sm border border-outline-variant/20 hover:border-tertiary transition-colors" href="https://www.tiktok.com/@fayezdevs" target="_blank" rel="noopener noreferrer">
                            <span class="material-symbols-outlined text-[18px] text-tertiary">smart_display</span>
                            <span dir="ltr">@fayezdevs</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Column: Interactive Intake Form (lg:col-span-7) -->
            <div class="lg:col-span-7 p-space-xl rounded-2xl bg-surface-container shadow-2xl border border-outline-variant/30">
                <form class="flex flex-col gap-space-md" id="lead-form">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
                        <!-- Name Input -->
                        <div class="flex flex-col gap-1.5">
                            <label class="font-label-code text-label-badge text-on-surface uppercase tracking-wider font-semibold" for="lead-name"><?= __t('contact.form_name') ?></label>
                            <input class="w-full px-space-md py-3 rounded-lg bg-surface-container-low text-on-surface font-body-md placeholder:text-outline-variant border border-outline-variant/30 focus:outline-none focus:border-primary focus:bg-surface-container-highest transition-colors" id="lead-name" name="name" placeholder="<?= __t('contact.form_name_ph') ?>" required type="text" />
                        </div>
                        <!-- Email Input -->
                        <div class="flex flex-col gap-1.5">
                            <label class="font-label-code text-label-badge text-on-surface uppercase tracking-wider font-semibold" for="lead-email"><?= __t('contact.form_email') ?></label>
                            <input class="w-full px-space-md py-3 rounded-lg bg-surface-container-low text-on-surface font-body-md placeholder:text-outline-variant border border-outline-variant/30 focus:outline-none focus:border-primary focus:bg-surface-container-highest transition-colors" id="lead-email" name="email" placeholder="<?= __t('contact.form_email_ph') ?>" required type="email" />
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
                        <!-- Phone Input -->
                        <div class="flex flex-col gap-1.5">
                            <label class="font-label-code text-label-badge text-on-surface uppercase tracking-wider font-semibold" for="lead-phone"><?= __t('contact.form_phone') ?></label>
                            <input class="w-full px-space-md py-3 rounded-lg bg-surface-container-low text-on-surface font-body-md placeholder:text-outline-variant border border-outline-variant/30 focus:outline-none focus:border-primary focus:bg-surface-container-highest transition-colors" id="lead-phone" name="phone" placeholder="<?= __t('contact.form_phone_ph') ?>" required type="tel" />
                        </div>
                        <!-- Project Category Select -->
                        <div class="flex flex-col gap-1.5">
                            <label class="font-label-code text-label-badge text-on-surface uppercase tracking-wider font-semibold" for="lead-category"><?= __t('contact.form_cat') ?></label>
                            <select class="w-full px-space-md py-3 rounded-lg bg-surface-container-low text-on-surface font-body-md border border-outline-variant/30 focus:outline-none focus:border-primary focus:bg-surface-container-highest transition-colors" id="lead-category" name="category">
                                <option value="mobile"><?= __t('contact.cat_opt_mobile') ?></option>
                                <option value="web"><?= __t('contact.cat_opt_web') ?></option>
                                <option value="plugin"><?= __t('contact.cat_opt_plugin') ?></option>
                                <option value="consult"><?= __t('contact.cat_opt_consult') ?></option>
                            </select>
                        </div>
                    </div>

                    <!-- Message Textarea -->
                    <div class="flex flex-col gap-1.5">
                        <label class="font-label-code text-label-badge text-on-surface uppercase tracking-wider font-semibold" for="lead-message"><?= __t('contact.form_msg') ?></label>
                        <textarea class="w-full px-space-md py-3 rounded-lg bg-surface-container-low text-on-surface font-body-md placeholder:text-outline-variant border border-outline-variant/30 focus:outline-none focus:border-primary focus:bg-surface-container-highest transition-colors" id="lead-message" name="message" placeholder="<?= __t('contact.form_msg_ph') ?>" required rows="4"></textarea>
                    </div>

                    <!-- Submission Action Row -->
                    <div class="flex flex-col sm:flex-row items-center justify-between gap-space-md pt-space-xs">
                        <div class="flex items-center gap-space-xs text-on-surface-variant font-label-code text-label-badge">
                            <span class="material-symbols-outlined text-[16px] text-secondary">lock</span>
                            <span><?= __t('contact.encryption_note') ?></span>
                        </div>
                        <button class="w-full sm:w-auto inline-flex items-center justify-center gap-space-xs px-space-xl py-3 rounded-xl bg-tertiary-container hover:bg-tertiary text-on-tertiary font-headline-sm text-headline-sm font-semibold transition-all duration-200 hover:scale-[1.02] shadow-[0_0_20px_rgba(225,29,72,0.35)] disabled:opacity-60 cursor-pointer" id="submit-btn" type="submit">
                            <span><?= __t('contact.btn_submit') ?></span>
                            <span class="material-symbols-outlined text-[20px]">send</span>
                        </button>
                    </div>

                    <!-- Dynamic Form Feedback Alert -->
                    <div class="hidden p-space-md rounded-lg font-body-sm text-body-sm" id="form-feedback"></div>
                </form>
            </div>
        </div>
    </div>
</section>

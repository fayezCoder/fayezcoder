    <!-- Solutions / Services -->
    <section class="py-5" id="solutions" style="background: rgba(255, 255, 255, 0.015);">
        <div class="container py-3">
            <div class="text-center mb-4">
                <span class="section-badge"><?= __t('solutions.badge') ?></span>
                <h2 class="h3 fw-bold mb-2"><?= __t('solutions.heading') ?></h2>
                <p class="text-muted mx-auto small" style="max-width: 560px;"><?= __t('solutions.subheading') ?></p>
            </div>

            <div class="row g-3">
                <div class="col-lg-4 col-md-6">
                    <div class="solution-card">
                        <div class="solution-icon-box">
                            <i class="bi bi-phone-fill"></i>
                        </div>
                        <h4 class="solution-title"><?= __t('solutions.app_dev') ?></h4>
                        <p class="solution-desc"><?= __t('solutions.app_dev_desc') ?></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="solution-card">
                        <div class="solution-icon-box">
                            <i class="bi bi-globe2"></i>
                        </div>
                        <h4 class="solution-title"><?= __t('solutions.web_systems') ?></h4>
                        <p class="solution-desc"><?= __t('solutions.web_systems_desc') ?></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="solution-card">
                        <div class="solution-icon-box">
                            <i class="bi bi-cpu-fill"></i>
                        </div>
                        <h4 class="solution-title"><?= __t('solutions.ops_tools') ?></h4>
                        <p class="solution-desc"><?= __t('solutions.ops_tools_desc') ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-5" id="about">
        <div class="container py-3">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <span class="section-badge"><?= __t('about.badge') ?></span>
                    <h2 class="h3 fw-bold mb-3"><?= __t('about.heading') ?></h2>
                    <p class="text-muted small mb-2 lh-lg"><?= __t('about.bio_1') ?></p>
                    <p class="text-muted small mb-2 lh-lg"><?= __t('about.bio_2') ?></p>
                    <p class="text-muted small mb-3 lh-lg"><?= __t('about.bio_3') ?></p>
                    <div class="freelance-badge">
                        <i class="bi bi-award-fill"></i>
                        <span><?= __t('hero.verified_badge') ?></span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-box">
                        <h4 class="h5 text-white fw-bold mb-3"><?= __t('skills.heading') ?></h4>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="skill-pill"><i class="bi bi-check2 text-primary"></i> Flutter / Dart</span>
                            <span class="skill-pill"><i class="bi bi-check2 text-primary"></i> PHP 8.x / OOP</span>
                            <span class="skill-pill"><i class="bi bi-check2 text-primary"></i> MySQL Database</span>
                            <span class="skill-pill"><i class="bi bi-check2 text-primary"></i> SQLite / Offline Storage</span>
                            <span class="skill-pill"><i class="bi bi-check2 text-primary"></i> REST APIs & JSON</span>
                            <span class="skill-pill"><i class="bi bi-check2 text-primary"></i> JavaScript / HTML5 / CSS3</span>
                            <span class="skill-pill"><i class="bi bi-check2 text-primary"></i> Git / GitHub</span>
                            <span class="skill-pill"><i class="bi bi-check2 text-primary"></i> Google Play Console</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

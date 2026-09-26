<!DOCTYPE html>
<html class="dark" lang="<?= CURRENT_LANG ?>" dir="<?= LANG_DIR ?>">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= __t('nav.brand') ?> | <?= __t('hero.role_title') ?> - <?= __t('hero.title_line1') ?> <?= __t('hero.title_gradient') ?></title>
    <meta name="description" content="<?= htmlspecialchars(strip_tags(__t('hero.bio'))) ?>" />
    <meta name="author" content="Fayez Almutairi" />
    <link rel="canonical" href="<?= APP_URL ?>/" />
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <!-- Google Fonts & Material Symbols -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@500;600&family=Plus+Jakarta+Sans:wght@600;700;800&family=Tajawal:wght@400;500;700;800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    <!-- Tailwind Play CDN & Custom Obsidian Cyberpunk Vanguard JIT Configuration -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "tertiary": "#ffb3b6",
                        "surface-container-highest": "#31353f",
                        "on-tertiary-container": "#ffdedf",
                        "on-primary-fixed-variant": "#5a00c6",
                        "on-primary-container": "#ede0ff",
                        "on-tertiary-fixed-variant": "#920028",
                        "on-primary": "#3f008e",
                        "surface-dim": "#0f131c",
                        "on-background": "#dfe2ef",
                        "on-secondary-fixed": "#001f26",
                        "on-primary-fixed": "#25005a",
                        "tertiary-fixed": "#ffdada",
                        "surface": "#0f131c",
                        "background": "#0f131c",
                        "primary-fixed": "#eaddff",
                        "on-secondary-container": "#00424e",
                        "surface-bright": "#353943",
                        "on-error": "#690005",
                        "surface-tint": "#d2bbff",
                        "secondary-fixed": "#acedff",
                        "surface-variant": "#31353f",
                        "secondary-fixed-dim": "#4cd7f6",
                        "surface-container-lowest": "#0a0e17",
                        "tertiary-container": "#ce023c",
                        "primary-container": "#7c3aed",
                        "surface-container-high": "#262a34",
                        "secondary": "#4cd7f6",
                        "on-tertiary-fixed": "#40000c",
                        "inverse-primary": "#732ee4",
                        "inverse-surface": "#dfe2ef",
                        "on-surface": "#dfe2ef",
                        "on-error-container": "#ffdad6",
                        "outline": "#958da1",
                        "tertiary-fixed-dim": "#ffb3b6",
                        "error-container": "#93000a",
                        "on-surface-variant": "#ccc3d8",
                        "error": "#ffb4ab",
                        "outline-variant": "#4a4455",
                        "on-secondary-fixed-variant": "#004e5c",
                        "primary-fixed-dim": "#d2bbff",
                        "inverse-on-surface": "#2c303a",
                        "surface-container": "#1c1f29",
                        "surface-container-low": "#181b25",
                        "primary": "#d2bbff",
                        "secondary-container": "#03b5d3",
                        "on-tertiary": "#68001a",
                        "on-secondary": "#003640"
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    spacing: {
                        "space-xl": "2.5rem",
                        "margin": "2rem",
                        "space-xs": "0.25rem",
                        "space-2xl": "4rem",
                        "margin-mobile": "1.25rem",
                        "gutter-mobile": "1rem",
                        "space-sm": "0.5rem",
                        "space-3xl": "6rem",
                        "gutter": "1.5rem",
                        "space-lg": "1.5rem",
                        "space-md": "1rem"
                    },
                    fontFamily: {
                        "body-sm": ["Inter", "Tajawal", "sans-serif"],
                        "label-badge": ["JetBrains Mono", "monospace"],
                        "headline-md": ["Plus Jakarta Sans", "Tajawal", "sans-serif"],
                        "body-lg": ["Inter", "Tajawal", "sans-serif"],
                        "body-md": ["Inter", "Tajawal", "sans-serif"],
                        "headline-sm": ["Plus Jakarta Sans", "Tajawal", "sans-serif"],
                        "label-code": ["JetBrains Mono", "monospace"],
                        "display-hero-mobile": ["Plus Jakarta Sans", "Tajawal", "sans-serif"],
                        "headline-lg": ["Plus Jakarta Sans", "Tajawal", "sans-serif"],
                        "label-meta": ["Inter", "Tajawal", "sans-serif"],
                        "headline-xl-mobile": ["Plus Jakarta Sans", "Tajawal", "sans-serif"],
                        "display-hero": ["Plus Jakarta Sans", "Tajawal", "sans-serif"],
                        "headline-xl": ["Plus Jakarta Sans", "Tajawal", "sans-serif"]
                    },
                    fontSize: {
                        "body-sm": ["14px", { lineHeight: "20px", fontWeight: "400" }],
                        "label-badge": ["11px", { lineHeight: "14px", letterSpacing: "0.06em", fontWeight: "600" }],
                        "headline-md": ["24px", { lineHeight: "32px", letterSpacing: "-0.015em", fontWeight: "600" }],
                        "body-lg": ["18px", { lineHeight: "28px", fontWeight: "400" }],
                        "body-md": ["16px", { lineHeight: "24px", fontWeight: "400" }],
                        "headline-sm": ["18px", { lineHeight: "26px", letterSpacing: "-0.01em", fontWeight: "600" }],
                        "label-code": ["13px", { lineHeight: "18px", letterSpacing: "0.02em", fontWeight: "500" }],
                        "display-hero-mobile": ["38px", { lineHeight: "44px", letterSpacing: "-0.025em", fontWeight: "800" }],
                        "headline-lg": ["32px", { lineHeight: "40px", letterSpacing: "-0.02em", fontWeight: "700" }],
                        "label-meta": ["12px", { lineHeight: "16px", fontWeight: "500" }],
                        "headline-xl-mobile": ["30px", { lineHeight: "38px", letterSpacing: "-0.02em", fontWeight: "700" }],
                        "display-hero": ["64px", { lineHeight: "72px", letterSpacing: "-0.03em", fontWeight: "800" }],
                        "headline-xl": ["44px", { lineHeight: "52px", letterSpacing: "-0.025em", fontWeight: "700" }]
                    }
                }
            }
        };
    </script>
    <style>
        @layer base {
            html, body { margin: 0; padding: 0; }
        }
        html[dir="rtl"] {
            font-family: 'Tajawal', sans-serif;
        }
    </style>
</head>
<body id="page-top" class="bg-background text-on-background font-body-md antialiased selection:bg-primary-container selection:text-on-primary-container min-h-screen">

# FayezCoder Portfolio

A multilingual personal portfolio and project showcase for Fayez Almutairi, built as a lightweight PHP website with Tailwind-powered styling and clean URL routing.

This repository powers the public portfolio at fayezcoder.com and showcases aviation, mobile, and enterprise-focused software work.

## Overview

This project is a custom-built portfolio website designed to:

- present projects and services in Arabic and English
- support clean SEO-friendly URLs
- render a polished cyberpunk-inspired visual design
- direct leads to WhatsApp for quick contact
- operate without a database or backend API for simple deployment

## Tech Stack

- PHP 8+
- Tailwind CSS
- JavaScript
- HTML / CSS
- Apache / LiteSpeed hosting compatible
- Static asset pipeline with Node.js

## Features

- Bilingual experience: Arabic and English
- Clean URL structure and canonical redirect handling
- Responsive design for desktop and mobile
- Project showcase with cards and dynamic details
- WhatsApp contact integration
- Structured SEO metadata and sitemap support
- Production-ready deployment configuration for shared hosting

## Repository Structure

```text
.
├── assets/               # Images, fonts, CSS assets
├── config/               # Application configuration
├── css/                  # Legacy / static CSS files
├── includes/              # Layout, pages, router, translation logic
├── js/                   # JavaScript frontend logic
├── lang/                 # Language resources and translations
├── scripts/              # Packaging and deployment utilities
├── tests/                # Test suite for routes and contact logic
├── .htaccess             # URL rewrite and server rules
├── DEPLOYMENT.md         # Hosting and deployment notes
├── PRELAUNCH_REVIEW.md   # Pre-launch checklist and review docs
├── index.php             # Application entry point
├── package.json          # Build and test scripts
├── tailwind.config.cjs   # Tailwind configuration
├── robots.txt            # Search engine crawler rules
├── sitemap.xml           # XML sitemap
├── .gitignore            # Git ignore rules
└── README.md             # Project overview
```

## Local Development

### Prerequisites

- PHP 8+
- Node.js and npm
- A local web server (or PHP built-in server)

### Install dependencies

```bash
npm ci
```

### Build frontend assets

```bash
npm run build
```

### Run tests

```bash
npm test
```

### Package for deployment

```bash
npm run package
```

## Production Notes

The project is configured for shared hosting environments and is designed to work without a database. The deployment flow is documented in:

- `DEPLOYMENT.md`

This repo also includes a production-ready static packaging step that prepares the deployable bundle.

## Deployment

The site is intended for deployment to hosting providers such as Hostinger, using a production bundle that includes built assets and `.htaccess` rules for URL rewriting and clean routing.

For more details, see:

- `DEPLOYMENT.md`

## Project Highlights

This portfolio includes work spanning:

- aviation software
- mobile applications
- internal enterprise tools
- web platforms and digital product showcases

## Contact

For business inquiries or collaboration opportunities:

- WhatsApp: +966 55 586 1780
- Website: https://fayezcoder.com

## License

This project is a personal portfolio repository and may not be intended for public reuse without permission. If you want to reuse or adapt the project structure, please contact the repository owner first.

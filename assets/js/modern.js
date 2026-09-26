/**
 * Fayez Almutairi Portfolio - Obsidian Cyberpunk Vanguard
 * Interactive Behaviour:
 *   1. Sticky header elevation on scroll
 *   2. Mobile navigation drawer
 *   3. Dynamic portfolio category filtering
 *   4. Contact intake form -> direct WhatsApp hand-off (no API, no database)
 */
document.addEventListener('DOMContentLoaded', () => {
    /* ------------------------------------------------------------------
     * 1. Header elevation on scroll
     * ------------------------------------------------------------------ */
    const header = document.querySelector('body > header');
    if (header) {
        const syncHeader = () => header.classList.toggle('shadow-[0_10px_30px_rgba(0,0,0,0.55)]', window.scrollY > 24);
        syncHeader();
        window.addEventListener('scroll', syncHeader, { passive: true });
    }

    /* ------------------------------------------------------------------
     * 2. Mobile navigation drawer
     * ------------------------------------------------------------------ */
    const menuBtn = document.getElementById('mobile-menu-btn');
    const drawer = document.getElementById('mobile-nav-drawer');
    if (menuBtn && drawer) {
        const icon = menuBtn.querySelector('.material-symbols-outlined');
        const closeDrawer = () => {
            drawer.classList.add('hidden');
            if (icon) icon.textContent = 'menu';
            menuBtn.setAttribute('aria-expanded', 'false');
        };

        menuBtn.setAttribute('aria-expanded', 'false');
        menuBtn.addEventListener('click', () => {
            if (drawer.classList.contains('hidden')) {
                drawer.classList.remove('hidden');
                if (icon) icon.textContent = 'close';
                menuBtn.setAttribute('aria-expanded', 'true');
            } else {
                closeDrawer();
            }
        });

        // Collapse after choosing a destination
        drawer.querySelectorAll('a').forEach((link) => link.addEventListener('click', closeDrawer));

        // Reset state when resizing back to desktop
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024) closeDrawer();
        });
    }

    /* ------------------------------------------------------------------
     * 3. Dynamic portfolio category filtering
     * ------------------------------------------------------------------ */
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('#portfolio-grid .project-card');
    if (filterButtons.length && projectCards.length) {
        const idleClasses = ['text-on-surface-variant', 'hover:text-on-surface'];

        const applyFilter = (filter) => {
            projectCards.forEach((card) => {
                const categories = (card.dataset.category || '').trim().split(/\s+/);
                const matches = filter === 'all' || categories.includes(filter);
                card.classList.toggle('hidden', !matches);
            });
        };

        filterButtons.forEach((btn) => {
            const isActive = btn.dataset.filter === 'all';
            btn.setAttribute('aria-pressed', isActive ? 'true' : 'false');

            btn.addEventListener('click', () => {
                filterButtons.forEach((other) => {
                    const isTarget = other === btn;
                    other.classList.toggle('bg-primary-container', isTarget);
                    other.classList.toggle('text-on-primary-container', isTarget);
                    other.classList.toggle('shadow-sm', isTarget);
                    idleClasses.forEach((cls) => other.classList.toggle(cls, !isTarget));
                    other.setAttribute('aria-pressed', isTarget ? 'true' : 'false');
                });
                applyFilter(btn.dataset.filter || 'all');
            });
        });

        applyFilter('all');
    }

    /* ------------------------------------------------------------------
     * 4. Contact form -> WhatsApp direct hand-off
     * ------------------------------------------------------------------ */
    const leadForm = document.getElementById('lead-form');
    if (leadForm) {
        const feedback = document.getElementById('form-feedback');
        const submitBtn = document.getElementById('submit-btn');
        const isArabic = (document.documentElement.lang || 'ar').toLowerCase().indexOf('ar') === 0;

        const fieldValue = (id) => {
            const field = document.getElementById(id);
            return field ? field.value.trim() : '';
        };

        const showFeedback = (message, isError) => {
            if (!feedback) return;
            feedback.textContent = message;
            feedback.className = 'p-space-md rounded-lg font-body-sm text-body-sm border ' +
                (isError
                    ? 'bg-error-container/30 text-on-error-container border-error/40'
                    : 'bg-secondary-container/20 text-secondary border-secondary/40');
        };

        leadForm.addEventListener('submit', (event) => {
            event.preventDefault();

            const name = fieldValue('lead-name');
            const email = fieldValue('lead-email');
            const phone = fieldValue('lead-phone');
            const message = fieldValue('lead-message');
            const categorySelect = document.getElementById('lead-category');
            const category = categorySelect ? categorySelect.options[categorySelect.selectedIndex].text.trim() : '';

            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;
            if (!name || !email || !phone || !message || !emailPattern.test(email)) {
                showFeedback(leadForm.dataset.errorMessage || 'Please fill in all required fields accurately.', true);
                return;
            }

            const whatsappNumber = leadForm.dataset.whatsapp || '966555861780';
            const greeting = isArabic ? 'السلام عليكم، فايز' : 'Hello Fayez';
            const labels = isArabic
                ? { name: 'الاسم', email: 'البريد الإلكتروني', phone: 'رقم التواصل', category: 'مجال المشروع', message: 'تفاصيل المشروع' }
                : { name: 'Name', email: 'Email', phone: 'Phone', category: 'Project Focus', message: 'Project Details' };

            const body = [
                greeting,
                '',
                '*' + labels.name + ':* ' + name,
                '*' + labels.email + ':* ' + email,
                '*' + labels.phone + ':* ' + phone,
                '*' + labels.category + ':* ' + category,
                '',
                '*' + labels.message + ':*',
                message
            ].join('\n');

            const whatsappUrl = 'https://wa.me/' + whatsappNumber + '?text=' + encodeURIComponent(body);

            showFeedback(leadForm.dataset.successMessage || 'Opening WhatsApp with your request...', false);

            const label = submitBtn ? submitBtn.querySelector('[data-btn-label]') : null;
            if (submitBtn) {
                if (label) label.textContent = submitBtn.dataset.sentLabel || label.textContent;
                submitBtn.disabled = true;
            }

            const opened = window.open(whatsappUrl, '_blank', 'noopener');
            if (!opened) {
                // Popup blocked fallback: continue in the current tab
                window.location.href = whatsappUrl;
            }

            window.setTimeout(() => {
                leadForm.reset();
                if (submitBtn) {
                    if (label) label.textContent = submitBtn.dataset.idleLabel || label.textContent;
                    submitBtn.disabled = false;
                }
            }, 1200);
        });
    }
});

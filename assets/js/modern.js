document.addEventListener('DOMContentLoaded', () => {
    // 1. Navbar Scroll effect
    const navbar = document.querySelector('.modern-nav');
    if (navbar) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 40) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    }

    // 2. Interactive Contact Form with WhatsApp Integration + Database API
    const contactForm = document.getElementById('modernContactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', async (e) => {
            e.preventDefault();

            const name = document.getElementById('cf-name').value.trim();
            const email = document.getElementById('cf-email').value.trim();
            const phone = document.getElementById('cf-phone').value.trim();
            const message = document.getElementById('cf-message').value.trim();
            const submitBtn = document.getElementById('cf-submit-btn');
            const alertBox = document.getElementById('cf-alert');

            if (!name || !email || !message) {
                alertBox.className = 'alert alert-danger mt-3';
                alertBox.textContent = 'يرجى ملء جميع الحقول المطلوبة / Please fill all required fields.';
                alertBox.classList.remove('d-none');
                return;
            }

            const originalBtnText = submitBtn.innerHTML;
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span> جاري المعالجة...';

            try {
                // Async save to PHP / MySQL backend
                await fetch('api/contact.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ name, email, phone, message, lang: document.documentElement.lang || 'ar' })
                });
            } catch (err) {
                console.warn('API error (saved locally or offline):', err);
            }

            // WhatsApp Direct Action
            const recipientPhone = "966593673722";
            const greeting = document.documentElement.lang === 'ar' ? 'السلام عليكم أخي فايز' : 'Hello Fayez';
            const whatsappText = `${greeting},%0A%0A📌 *الاسم / Name:* ${encodeURIComponent(name)}%0A📧 *البريد / Email:* ${encodeURIComponent(email)}%0A📱 *الهاتف / Phone:* ${encodeURIComponent(phone)}%0A📝 *التفاصيل / Details:*%0A${encodeURIComponent(message)}`;

            alertBox.className = 'alert alert-success mt-3';
            alertBox.textContent = 'تم إرسال طلبك! جاري فتح محادثة واتساب المباشرة...';
            alertBox.classList.remove('d-none');

            setTimeout(() => {
                window.open(`https://wa.me/${recipientPhone}?text=${whatsappText}`, '_blank');
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalBtnText;
                contactForm.reset();
            }, 1000);
        });
    }
});

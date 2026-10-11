<?php
/**
 * Projects Data Source
 * Fully aligned with Obsidian Cyberpunk Vanguard Design
 */

return [
    'aerosupervisor' => [
        'id' => 'aerosupervisor',
        'title' => [
            'ar' => 'محطة AeroSupervisor لمشرفي الطيران',
            'en' => 'AeroSupervisor'
        ],
        'category' => 'aviation mobile',
        'category_badge' => [
            'ar' => 'محطة عمل صيانة الطيران',
            'en' => 'Aviation Workstation'
        ],
        'client' => [
            'ar' => 'تطوير ذاتي ونشر مستقل',
            'en' => 'Self-Published'
        ],
        'meta_pill' => [
            'icon' => 'lock',
            'text' => [
                'ar' => 'NoSQL محلي مشفر',
                'en' => 'Offline NoSQL'
            ]
        ],
        'image' => 'assets/img/showcase/aerosupervisor_ui.png',
        'summary' => [
            'ar' => 'محطة عمل عالية الأداء لمشرفي الطيران وفنيي صيانة خط الطيران تعمل Offline بالكامل مع تصنيف فصول ATA، مستعرض المراجع التخطيطية، وحزم ZIP المشفرة محلياً.',
            'en' => 'High-performance workstation app for aviation supervisors, line mechanics, and flight line technicians. Built with ATA-linked knowledge cards, reference schematic zoom viewer, and local encrypted ZIP backups.'
        ],
        'tech_stack' => ['Flutter', 'Local NoSQL', 'ATA Chapters'],
        'play_store' => 'https://play.google.com/store/apps/details?id=com.fayezcoder.aerosupervisor',
        'extra_meta' => [
            'ar' => 'إصدار إنتاجي V2.1',
            'en' => 'Production V2.1'
        ],
        'accent' => 'secondary'
    ],
    'c130' => [
        'id' => 'c130',
        'title' => [
            'ar' => 'نظام إدارة وأعطال C130',
            'en' => 'C130 Aircraft Hub'
        ],
        'category' => 'aviation mobile',
        'category_badge' => [
            'ar' => 'الطيران / مؤسسي',
            'en' => 'Military / Enterprise'
        ],
        'client' => [
            'ar' => 'الدفاع والتجاري',
            'en' => 'Defense & Commercial'
        ],
        'meta_pill' => [
            'icon' => 'verified_user',
            'text' => [
                'ar' => 'صلاحيات رتب متقدمة',
                'en' => 'Role Hierarchy'
            ]
        ],
        'image' => 'assets/img/showcase/c130_ui.png',
        'summary' => [
            'ar' => 'منظومة دقيقة لمتابعة وإدارة أعطال طائرات C130 لأكثر من 10 تخصصات صيانة مختلفة، مع توثيق بالأدلة المصورة، ولوحة قيادة توجيهية خاصة بالقائد للأولويات (عالية/متوسطة/منخفضة).',
            'en' => 'Mission-critical aircraft issue tracking suite. Features 10+ isolated technician specialties, photographic damage evidence, and a Commander module for real-time priority orders (High/Med/Low).'
        ],
        'tech_stack' => ['Flutter', 'Android SDK', 'RBAC Security'],
        'play_store' => 'https://play.google.com/store/apps/details?id=com.fayezcoder.c130&pli=1',
        'extra_meta' => [
            'ar' => 'تشغيل مؤسسي نشط',
            'en' => 'Enterprise Active'
        ],
        'accent' => 'tertiary'
    ],
    'mnjz' => [
        'id' => 'mnjz',
        'title' => [
            'ar' => 'خزنة وثائق منجز (Mnjz)',
            'en' => 'Mnjz Certificates'
        ],
        'category' => 'mobile',
        'category_badge' => [
            'ar' => 'خزنة رقمية ذكية',
            'en' => 'Digital Vault'
        ],
        'client' => [
            'ar' => 'تطوير ذاتي ونشر عام',
            'en' => 'Self-Published'
        ],
        'meta_pill' => [
            'icon' => 'lock',
            'text' => [
                'ar' => 'خزنة مشفرة محلياً',
                'en' => 'Encrypted Vault'
            ]
        ],
        'image' => 'assets/img/showcase/mnjz_ui.png',
        'summary' => [
            'ar' => 'خزنة رقمية ذكية لحفظ وتنظيم واسترجاع الشهادات والدورات والتراخيص فورياً. مدمجة مع قاعدة بيانات SQLite للفهرسة السريعة والمشاركة الآمنة بضغطة زر.',
            'en' => 'Secure digital vault engineered to store, organize, and instantly retrieve training certificates, degrees, and licenses. Integrated with SQLite database for rapid local indexing and one-tap sharing.'
        ],
        'tech_stack' => ['Flutter', 'SQFlite', 'Doc Vault'],
        'play_store' => 'https://play.google.com/store/apps/details?id=com.fayezcoder.mnjz_sqflite',
        'extra_meta' => [
            'ar' => 'تقييم 4.8 نجوم',
            'en' => '4.8 Rating'
        ],
        'accent' => 'secondary'
    ],
    'alcpt' => [
        'id' => 'alcpt',
        'title' => [
            'ar' => 'تطبيق اختبارات ALCPT',
            'en' => 'ALCPT Exam Suite'
        ],
        'category' => 'mobile',
        'category_badge' => [
            'ar' => 'تقييم وتعليم EdTech',
            'en' => 'EdTech Assessment'
        ],
        'client' => [
            'ar' => 'تطوير ذاتي ونشر عام',
            'en' => 'Self-Published'
        ],
        'meta_pill' => [
            'icon' => 'headphones',
            'text' => [
                'ar' => '10 أشرطة صوتية تفاعلية',
                'en' => '10 Audio Tapes'
            ]
        ],
        'image' => 'assets/img/showcase/alcpt_ui.png',
        'summary' => [
            'ar' => 'نظام إعداد وتدريب لاختبار تحديد مستوى اللغة الإنجليزية الأمريكي الموحد ALCPT. يتضمن أكثر من 1,000 سؤال تفاعلي، وبث وتشغيل مقاطع الاستماع، وتقييم وتصحيح لحظي.',
            'en' => 'Standardized American Language Course Placement Test preparation system. Features 1,000+ interactive assessment questions, audio playback streaming, and real-time score grading.'
        ],
        'tech_stack' => ['Flutter', 'Audio Engine', 'Assessment'],
        'play_store' => 'https://play.google.com/store/apps/details?id=com.fayezcoder.english',
        'extra_meta' => [
            'ar' => 'أكثر من 1000 سؤال',
            'en' => '1,000+ Questions'
        ],
        'accent' => 'primary'
    ],
    'translator' => [
        'id' => 'translator',
        'title' => [
            'ar' => 'المترجم الصوتي الفوري',
            'en' => 'Real-Time Translator'
        ],
        'category' => 'mobile',
        'category_badge' => [
            'ar' => 'أدوات ذكية و AI',
            'en' => 'Utility & AI'
        ],
        'client' => [
            'ar' => 'تطوير ذاتي ونشر عام',
            'en' => 'Self-Published'
        ],
        'meta_pill' => [
            'icon' => 'record_voice_over',
            'text' => [
                'ar' => 'ترجمة صوتية فورية',
                'en' => 'Real-time Voice'
            ]
        ],
        'image' => 'assets/img/showcase/translator_ui.png',
        'summary' => [
            'ar' => 'محرك ترجمة لغوية فوري وعالي السرعة للتواصل متعدد اللغات. يدمج تحويل الصوت إلى نص، النطق الصوتي، وأنماط المحادثة المزدوجة لأكثر من 50 لغة.',
            'en' => 'Fast, friction-free language translation engine engineered for effortless cross-cultural communication. Incorporates high-accuracy voice-to-text, text-to-speech, and dual-window conversational modes.'
        ],
        'tech_stack' => ['Android SDK', 'Speech API', '50+ Languages'],
        'play_store' => 'https://play.google.com/store/apps/details?id=com.fayezcoder.translator',
        'extra_meta' => [
            'ar' => 'ترجمة فورية ذكية',
            'en' => 'Instant Translation'
        ],
        'accent' => 'secondary'
    ],
    'aerofix' => [
        'id' => 'aerofix',
        'title' => [
            'ar' => 'منصة مجتمع aeroFix',
            'en' => 'aeroFix Community'
        ],
        'category' => 'aviation web',
        'category_badge' => [
            'ar' => 'بوابة ويب ومجتمع',
            'en' => 'Web Portal & Forum'
        ],
        'client' => [
            'ar' => 'مجتمع صيانة الطيران',
            'en' => 'Aviation Community'
        ],
        'meta_pill' => [
            'icon' => 'public',
            'text' => [
                'ar' => 'منصة ويب عالمية',
                'en' => 'Global Web'
            ]
        ],
        'image' => 'assets/img/showcase/aerofix_ui.png',
        'summary' => [
            'ar' => 'منصة تعاونية سحابية تجمع مهندسي وفنيي صيانة الطيران حول العالم. تشمل أرشيف المراجع والأدلة الفنية، لوحات استكشاف واستكشاف الأعطال، ودليل توافر القطع.',
            'en' => 'Global collaborative aviation platform uniting technicians, flight line engineers, and maintenance chiefs. Features technical manuals archive, peer troubleshooting boards, and parts availability directories.'
        ],
        'tech_stack' => ['PHP & MySQL', 'JavaScript', 'Responsive'],
        'live_url' => 'https://aerofix.fayezcoder.com',
        'extra_meta' => [
            'ar' => 'aerofix.fayezcoder.com',
            'en' => 'aerofix.fayezcoder.com'
        ],
        'accent' => 'secondary'
    ],
    'employee_manager' => [
        'id' => 'employee_manager',
        'title' => [
            'ar' => 'نظام إدارة الموظفين والحضور',
            'en' => 'Employee Attendance Management'
        ],
        'category' => 'web',
        'category_badge' => [
            'ar' => 'نظام إداري كامل (Laravel)',
            'en' => 'Enterprise Web App (Laravel)'
        ],
        'client' => [
            'ar' => 'نموذج تجريبي للعملاء',
            'en' => 'Demo Client System'
        ],
        'meta_pill' => [
            'icon' => 'badge',
            'text' => [
                'ar' => 'لوحة تحكم وتقارير',
                'en' => 'Dashboard & Audit'
            ]
        ],
        'image' => 'assets/img/showcase/aerofix_ui.png',
        'summary' => [
            'ar' => 'نظام إداري متكامل لإدارة الموظفين والورديات وسجلات الحضور والإنصراف بنقرة زر مع حساب ساعات العمل وتجاوز منتصف الليل، وتصدير التقارير وسجل التدقيق الشامل (Audit Log).',
            'en' => 'Comprehensive employee management system for attendance tracking, overnight shifts calculation, department roles, printable CSV reports, and full audit logs.'
        ],
        'tech_stack' => ['Laravel 12', 'Blade', 'MySQL', 'Tailwind'],
        'live_url' => 'https://demo.fayezcoder.com',
        'extra_meta' => [
            'ar' => 'demo.fayezcoder.com',
            'en' => 'demo.fayezcoder.com'
        ],
        'accent' => 'primary'
    ]
];

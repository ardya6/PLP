/* ============================================================
   INFORMATIKA LEARNING PLATFORM - Main JavaScript
   ============================================================ */

document.addEventListener('DOMContentLoaded', () => {

    // ============================================================
    // 1. DARK MODE TOGGLE
    // ============================================================
    const html        = document.documentElement;
    const themeToggle = document.getElementById('themeToggle');
    const themeIcon   = document.getElementById('themeIcon');

    // Ambil preferensi tersimpan atau ikuti sistem
    const savedTheme  = localStorage.getItem('informatika-theme');
    const systemDark  = window.matchMedia('(prefers-color-scheme: dark)').matches;
    const initTheme   = savedTheme || (systemDark ? 'dark' : 'light');

    applyTheme(initTheme);

    if (themeToggle) {
        themeToggle.addEventListener('click', () => {
            const current = html.getAttribute('data-theme');
            applyTheme(current === 'dark' ? 'light' : 'dark');
        });
    }

    function applyTheme(theme) {
        html.setAttribute('data-theme', theme);
        localStorage.setItem('informatika-theme', theme);
        if (themeIcon) {
            themeIcon.className = theme === 'dark' ? 'fas fa-sun' : 'fas fa-moon';
        }
    }

    // ============================================================
    // 2. NAVBAR — Scroll Effect & Hamburger
    // ============================================================
    const navbar    = document.getElementById('navbar');
    const hamburger = document.getElementById('hamburger');
    const navMenu   = document.getElementById('navMenu');

    // Scroll Effect
    window.addEventListener('scroll', () => {
        if (navbar) {
            navbar.classList.toggle('scrolled', window.scrollY > 20);
        }
        handleBackToTop();
    }, { passive: true });

    // Hamburger Toggle
    if (hamburger && navMenu) {
        hamburger.addEventListener('click', () => {
            const isOpen = navMenu.classList.toggle('open');
            hamburger.classList.toggle('open', isOpen);
            hamburger.setAttribute('aria-expanded', isOpen);
        });

        // Tutup menu saat klik di luar
        document.addEventListener('click', (e) => {
            if (!navbar?.contains(e.target)) {
                navMenu.classList.remove('open');
                hamburger.classList.remove('open');
            }
        });
    }

    // Dropdown toggle di mobile
    document.querySelectorAll('.nav-item.dropdown > .nav-link').forEach(link => {
        link.addEventListener('click', (e) => {
            if (window.innerWidth <= 768) {
                e.preventDefault();
                link.closest('.nav-item').classList.toggle('open');
            }
        });
    });

    // ============================================================
    // 3. BACK TO TOP BUTTON
    // ============================================================
    const backToTop = document.getElementById('backToTop');

    function handleBackToTop() {
        if (backToTop) {
            backToTop.classList.toggle('visible', window.scrollY > 400);
        }
    }

    if (backToTop) {
        backToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // ============================================================
    // 4. SCROLL REVEAL ANIMATION (Intersection Observer)
    // ============================================================
    const revealElements = document.querySelectorAll('.fade-in-up, .materi-section');

    if (revealElements.length > 0) {
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        revealElements.forEach(el => revealObserver.observe(el));
    }

    // ============================================================
    // 5. ACTIVE SIDEBAR LINK (Content Pages)
    // ============================================================
    const sidebarLinks = document.querySelectorAll('.sidebar-link[href^="#"]');

    if (sidebarLinks.length > 0) {
        const sectionTargets = [];

        sidebarLinks.forEach(link => {
            const targetId = link.getAttribute('href').slice(1);
            const target   = document.getElementById(targetId);
            if (target) sectionTargets.push({ link, target });
        });

        const sidebarObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                const matched = sectionTargets.find(s => s.target === entry.target);
                if (matched && entry.isIntersecting) {
                    sidebarLinks.forEach(l => l.classList.remove('active'));
                    matched.link.classList.add('active');
                }
            });
        }, {
            threshold: 0.3,
            rootMargin: '-80px 0px -50% 0px'
        });

        sectionTargets.forEach(({ target }) => sidebarObserver.observe(target));

        // Smooth scroll saat klik sidebar
        sidebarLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const targetId = link.getAttribute('href').slice(1);
                const target   = document.getElementById(targetId);
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - 90,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }

    // ============================================================
    // 6. TAB SYSTEM (untuk Modul Perangkat Teknologi)
    // ============================================================
    const tabBtns     = document.querySelectorAll('[data-tab]');
    const tabPanels   = document.querySelectorAll('[data-panel]');

    if (tabBtns.length > 0) {
        tabBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const target = btn.dataset.tab;

                // Update tombol
                tabBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                // Update panel
                tabPanels.forEach(panel => {
                    const isMatch = panel.dataset.panel === target;
                    panel.classList.toggle('active', isMatch);
                    panel.style.display = isMatch ? 'block' : 'none';
                });
            });
        });

        // Aktifkan tab pertama by default
        tabBtns[0]?.click();
    }

    // ============================================================
    // 7. PROGRESS BAR BACA
    // ============================================================
    const progressBar = document.getElementById('readingProgress');

    if (progressBar) {
        window.addEventListener('scroll', () => {
            const docHeight    = document.documentElement.scrollHeight - window.innerHeight;
            const scrolled     = window.scrollY;
            const progress     = docHeight > 0 ? (scrolled / docHeight) * 100 : 0;
            progressBar.style.width = `${Math.min(progress, 100)}%`;
        }, { passive: true });
    }

    // ============================================================
    // 8. ANIMASI ANGKA (Counter)
    // ============================================================
    const counters = document.querySelectorAll('[data-count]');

    if (counters.length > 0) {
        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    counterObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        counters.forEach(el => counterObserver.observe(el));
    }

    function animateCounter(el) {
        const target   = parseInt(el.dataset.count, 10);
        const duration = 1500;
        const step     = target / (duration / 16);
        let   current  = 0;

        const timer = setInterval(() => {
            current += step;
            if (current >= target) {
                el.textContent = target + (el.dataset.suffix || '');
                clearInterval(timer);
            } else {
                el.textContent = Math.floor(current) + (el.dataset.suffix || '');
            }
        }, 16);
    }

    // ============================================================
    // 9. SMOOTH SCROLL untuk anchor link biasa
    // ============================================================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        if (!anchor.classList.contains('sidebar-link')) {
            anchor.addEventListener('click', (e) => {
                const target = document.querySelector(anchor.getAttribute('href'));
                if (target) {
                    e.preventDefault();
                    window.scrollTo({
                        top: target.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        }
    });

    // ============================================================
    // 10. TOOLTIP sederhana
    // ============================================================
    document.querySelectorAll('[data-tooltip]').forEach(el => {
        el.style.position = 'relative';

        el.addEventListener('mouseenter', () => {
            const tip = document.createElement('div');
            tip.className    = 'tooltip';
            tip.textContent  = el.dataset.tooltip;
            tip.style.cssText = `
                position:absolute; bottom:calc(100% + 8px); left:50%; 
                transform:translateX(-50%); background:#0f172a; color:white;
                padding:0.35rem 0.75rem; border-radius:6px; font-size:0.75rem;
                white-space:nowrap; pointer-events:none; z-index:9999;
                box-shadow:0 4px 12px rgba(0,0,0,0.2);
            `;
            el.appendChild(tip);
        });

        el.addEventListener('mouseleave', () => {
            el.querySelector('.tooltip')?.remove();
        });
    });

    console.log('%c🎓 Belajar Informatika %c| Ready!', 
        'color:#2563eb; font-weight:bold; font-size:14px;',
        'color:#64748b; font-size:14px;'
    );
});

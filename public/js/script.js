document.addEventListener('DOMContentLoaded', () => {

    // ── 1. Loading Spinner ─────────────────────────────────────────
    const loader = document.getElementById('loader');
    if (loader) {
        const hideLoader = () => {
            loader.style.opacity = '0';
            loader.style.visibility = 'hidden';
            setTimeout(() => { loader.style.display = 'none'; }, 650);
        };

        // Hide after short delay OR on first user interaction
        const loaderTimer = setTimeout(hideLoader, 1800);

        const earlyHide = () => {
            clearTimeout(loaderTimer);
            hideLoader();
        };
        window.addEventListener('scroll',    earlyHide, { once: true });
        window.addEventListener('wheel',     earlyHide, { once: true });
        window.addEventListener('touchmove', earlyHide, { once: true });
        window.addEventListener('click',     earlyHide, { once: true });
    }

    // ── 2. AOS Animation ──────────────────────────────────────────
    if (typeof AOS !== 'undefined') {
        AOS.init({
            once: true,
            offset: 60,
            duration: 750,
            easing: 'ease-out-cubic'
        });
    }

    // ── 3. Typed.js Typing Effect ─────────────────────────────────
    if (document.getElementById('typed-text') && typeof Typed !== 'undefined') {
        new Typed('#typed-text', {
            strings: ['Junior Web Developer', 'Frontend Developer', 'UI/UX Designer', 'Laravel Developer'],
            typeSpeed: 55,
            backSpeed: 30,
            backDelay: 2200,
            loop: true
        });
    }

    // ── 4. Navbar Scroll Effect & Active Link Tracking ────────────
    const navbar   = document.getElementById('navbar');
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

    const onScroll = () => {
        // Scrolled state
        if (navbar) {
            navbar.classList.toggle('scrolled', window.scrollY > 50);
        }

        // Active nav link
        let current = '';
        sections.forEach(section => {
            if (window.scrollY >= section.offsetTop - 220) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
            const href = link.getAttribute('href') || '';
            if (current && href.endsWith(`#${current}`)) {
                link.classList.add('active');
            }
        });
    };

    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll(); // run once on load

    // ── 5. Smooth Mobile Nav Close on Link Click ──────────────────
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            const navbarCollapse = document.getElementById('navbarNav');
            if (navbarCollapse && navbarCollapse.classList.contains('show')) {
                const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
                if (bsCollapse) bsCollapse.hide();
            }
        });
    });

    // ── 6. Back-to-Top Button ─────────────────────────────────────
    const backToTopBtn = document.getElementById('btn-back-to-top');
    if (backToTopBtn) {
        window.addEventListener('scroll', () => {
            backToTopBtn.style.display = window.scrollY > 300 ? 'flex' : 'none';
        }, { passive: true });

        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

});

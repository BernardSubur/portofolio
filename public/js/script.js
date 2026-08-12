document.addEventListener('DOMContentLoaded', () => {
    // 1. Loading Spinner (Dismiss on scroll/slide)
    const loader = document.getElementById('loader');
    if (loader) {
        const hideLoader = () => {
            if (loader.style.display !== 'none') {
                loader.style.opacity = '0';
                loader.style.transform = 'translateY(-100%)';
                
                setTimeout(() => {
                    loader.style.display = 'none';
                }, 800);
                
                // Remove listeners after triggering
                window.removeEventListener('scroll', hideLoader);
                window.removeEventListener('wheel', hideLoader);
                window.removeEventListener('touchmove', hideLoader);
                window.removeEventListener('click', hideLoader);
            }
        };

        // Listen for user interaction to hide the loader
        window.addEventListener('scroll', hideLoader, { once: true });
        window.addEventListener('wheel', hideLoader, { once: true });
        window.addEventListener('touchmove', hideLoader, { once: true });
        window.addEventListener('click', hideLoader, { once: true });
    }

    // 2. Initialize AOS Animation
    if (typeof AOS !== 'undefined') {
        AOS.init({
            once: true,
            offset: 50,
            duration: 800,
            easing: 'ease-in-out'
        });
    }

    // 3. Typing Effect
    const typedTextElement = document.getElementById('typed-text');
    if (typedTextElement && typeof Typed !== 'undefined') {
        new Typed('#typed-text', {
            strings: ['Web Developer', 'UI/UX Designer'],
            typeSpeed: 50,
            backSpeed: 30,
            backDelay: 2000,
            loop: true
        });
    }

    // 4. Navbar Scroll Effect & Active State
    const navbar = document.getElementById('navbar');
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

    window.addEventListener('scroll', () => {
        // Navbar Scrolled State
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }

        // Active Navbar Link
        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            if (window.scrollY >= (sectionTop - 200)) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href').includes(current)) {
                link.classList.add('active');
            }
        });
    });

    // 5. Dark Mode Toggle
    const themeToggleBtn = document.getElementById('theme-toggle');
    const themeIcon = document.getElementById('theme-icon');
    const htmlElement = document.documentElement;

    // Check localStorage for theme
    const currentTheme = localStorage.getItem('theme') || 'light';
    htmlElement.setAttribute('data-bs-theme', currentTheme);
    updateThemeIcon(currentTheme);

    if (themeToggleBtn) {
        themeToggleBtn.addEventListener('click', () => {
            const current = htmlElement.getAttribute('data-bs-theme');
            const newTheme = current === 'light' ? 'dark' : 'light';
            
            htmlElement.setAttribute('data-bs-theme', newTheme);
            localStorage.setItem('theme', newTheme);
            updateThemeIcon(newTheme);
        });
    }

    function updateThemeIcon(theme) {
        if (!themeIcon) return;
        if (theme === 'dark') {
            themeIcon.classList.remove('bi-moon-fill');
            themeIcon.classList.add('bi-sun-fill');
            themeIcon.classList.add('text-warning');
        } else {
            themeIcon.classList.remove('bi-sun-fill', 'text-warning');
            themeIcon.classList.add('bi-moon-fill');
        }
    }

    // 6. Back To Top Button
    const backToTopBtn = document.getElementById('btn-back-to-top');
    
    if (backToTopBtn) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                backToTopBtn.style.display = 'flex';
            } else {
                backToTopBtn.style.display = 'none';
            }
        });

        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    // 7. Enforce Light Theme on Cards
    // This ensures cards and their contents (badges, text, icons) 
    // stay exactly like light mode even when dark mode is active.
    document.querySelectorAll('.card, .glass-card').forEach(card => {
        card.setAttribute('data-bs-theme', 'light');
    });
});

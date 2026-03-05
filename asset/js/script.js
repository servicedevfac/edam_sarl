/**
 * EDAM SARL - Global Animation & Interaction Script
 */

document.addEventListener('DOMContentLoaded', () => {
    // 1. Intersection Observer for Scroll Reveals
    const revealOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const revealObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('revealed');
                // Once revealed, we don't need to observe it anymore
                observer.unobserve(entry.target);
            }
        });
    }, revealOptions);

    // Select all elements with reveal classes
    const revealElements = document.querySelectorAll('.reveal-fade, .reveal-up, .reveal-left, .reveal-right');
    revealElements.forEach(el => revealObserver.observe(el));

    // 2. Smooth Scroll for internal links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href !== '#') {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            }
        });
    });

    // 3. Header Scroll Effect
    const header = document.querySelector('header');
    if (header) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('header-scrolled');
            } else {
                header.classList.remove('header-scrolled');
            }
        });
    }

    // 4. Parallax Effect for Hero Sections (Dynamic Backgrounds)
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const parallaxElements = document.querySelectorAll('.page-header, .hero-slider');
        parallaxElements.forEach(el => {
            const speed = 0.5;
            el.style.backgroundPositionY = (scrolled * speed) + 'px';
        });
    });
});

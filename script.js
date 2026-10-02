// ===== CARROUSEL =====
document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.carousel-slide');
    const indicators = document.querySelectorAll('.indicator');
    const prevBtn = document.querySelector('.carousel-arrow.prev');
    const nextBtn = document.querySelector('.carousel-arrow.next');
    let currentSlide = 0;
    let interval;

    function goToSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.toggle('active', i === index);
        });
        indicators.forEach((ind, i) => {
            ind.classList.toggle('active', i === index);
        });
        currentSlide = index;
    }

    function nextSlide() {
        const next = (currentSlide + 1) % slides.length;
        goToSlide(next);
    }

    function prevSlide() {
        const prev = (currentSlide - 1 + slides.length) % slides.length;
        goToSlide(prev);
    }

    function startAutoPlay() {
        stopAutoPlay();
        interval = setInterval(nextSlide, 5000);
    }

    function stopAutoPlay() {
        clearInterval(interval);
    }

    // Événements
    if (prevBtn) prevBtn.addEventListener('click', () => { prevSlide(); startAutoPlay(); });
    if (nextBtn) nextBtn.addEventListener('click', () => { nextSlide(); startAutoPlay(); });

    indicators.forEach((indicator, i) => {
        indicator.addEventListener('click', () => {
            goToSlide(i);
            startAutoPlay();
        });
    });

    // Pause au survol
    const carouselContainer = document.querySelector('.carousel-container');
    if (carouselContainer) {
        carouselContainer.addEventListener('mouseenter', stopAutoPlay);
        carouselContainer.addEventListener('mouseleave', startAutoPlay);
    }

    // Démarrer
    goToSlide(0);
    startAutoPlay();

    // ===== MENU MOBILE =====
    const menuToggle = document.querySelector('.menu-toggle');
    const navUl = document.querySelector('nav ul');

    if (menuToggle) {
        menuToggle.addEventListener('click', function() {
            navUl.classList.toggle('open');
        });
    }

    document.querySelectorAll('nav ul li a').forEach(link => {
        link.addEventListener('click', () => {
            if (navUl) navUl.classList.remove('open');
        });
    });

    // ===== DARK MODE =====
    const darkToggle = document.getElementById('darkModeToggle');
    const body = document.body;
    const icon = darkToggle ? darkToggle.querySelector('i') : null;

    // Vérifier la préférence sauvegardée
    if (localStorage.getItem('darkMode') === 'enabled') {
        body.classList.add('dark-mode');
        if (icon) icon.className = 'fas fa-sun';
    }

    if (darkToggle) {
        darkToggle.addEventListener('click', function() {
            body.classList.toggle('dark-mode');
            if (body.classList.contains('dark-mode')) {
                localStorage.setItem('darkMode', 'enabled');
                if (icon) icon.className = 'fas fa-sun';
            } else {
                localStorage.setItem('darkMode', 'disabled');
                if (icon) icon.className = 'fas fa-moon';
            }
        });
    }

    // ===== SCROLL ANIMATIONS =====
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });

    document.querySelectorAll('.animate-up, .animate-up-delay, .animate-up-delay2').forEach(el => {
        observer.observe(el);
    });

    // ===== STATISTIQUES =====
    const statsSection = document.querySelector('.stats');
    const statNumbers = document.querySelectorAll('.stat-number');
    let counted = false;

    const countObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !counted) {
                counted = true;
                statNumbers.forEach(stat => {
                    const target = parseInt(stat.getAttribute('data-count'));
                    let current = 0;
                    const increment = Math.ceil(target / 50);
                    const timer = setInterval(() => {
                        current += increment;
                        if (current >= target) {
                            current = target;
                            clearInterval(timer);
                        }
                        stat.textContent = current;
                    }, 30);
                });
            }
        });
    }, { threshold: 0.5 });

    if (statsSection) {
        countObserver.observe(statsSection);
    }

    // ===== SCROLL TOP =====
    const scrollBtn = document.getElementById('scrollTop');
    window.addEventListener('scroll', function() {
        if (window.scrollY > 300) {
            scrollBtn.classList.add('show');
        } else {
            scrollBtn.classList.remove('show');
        }
    });

    if (scrollBtn) {
        scrollBtn.addEventListener('click', function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }
});
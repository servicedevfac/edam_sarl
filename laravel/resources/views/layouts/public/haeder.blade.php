<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDAM SARL – Excellence & Professionnalisme</title>
    <link rel="stylesheet" href="asset/styles/style.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>

    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="top-info">
                <span><i class="fas fa-map-marker-alt"></i> Cocody Angre Nouveau CHU</span>
            </div>
            <div class="top-social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-tiktok"></i></a>
            </div>
        </div>
    </div>

    <!-- Header / Navigation -->
    <header>
        <div class="container">
            <div class="logo">
                <a href="/">
                    <img src="asset/images/logo.png" alt="EDAM SARL Logo">
                </a>
            </div>
            <nav id="main-nav">
                <ul>
                    <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Accueil</a></li>
                    <li><a href="/about" class="{{ request()->is('about') ? 'active' : '' }}">A Propos</a></li>
                    <li><a href="/edam-clean" class="{{ request()->is('edam-clean') ? 'active' : '' }}">EDAM Clean</a>
                    </li>
                    <li><a href="/edam_gift" class="{{ request()->is('edam_gift') ? 'active' : '' }}">EDAM Gift</a></li>
                    <li><a href="/galerie" class="{{ request()->is('galerie') ? 'active' : '' }}">Galerie</a></li>
                    <li><a href="/contact" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a></li>
                </ul>
            </nav>
            <div class="mobile-menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>
    @yield('content')
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col footer-about">
                    <h4>A Propos</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h4>Liens Rapides</h4>
                    <ul class="footer-links">
                        <li><a href="index.html">Accueil</a></li>
                        <li><a href="about.html">A Propos</a></li>
                        <li><a href="edan-clean.html">EDAM Clean</a></li>
                        <li><a href="edam_gift.html">EDAM Gift</a></li>
                        <li><a href="galerie.html">Galerie</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contactez-nous</h4>
                    <ul class="contact-info">
                        <li><i class="fas fa-phone"></i> +225 01 01 01 01 01</li>
                        <li><i class="fas fa-envelope"></i> infos@edamsarl.com</li>
                        <li><i class="fas fa-map-marker-alt"></i> Cocody Angre Nouveau CHU</li>
                        <li><i class="fas fa-clock"></i> Lun-Ven: 08H00 - 17H00</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                &copy; 2026 EDAM SARL Tous droits réservés. Designé par FIRME ATTOU & CO
            </div>
        </div>
    </footer>

    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');
        let slideInterval = setInterval(nextSlide, 5000);

        function showSlide(n) {
            slides[currentSlide].classList.remove('active');
            dots[currentSlide].classList.remove('active');
            currentSlide = (n + slides.length) % slides.length;
            slides[currentSlide].classList.add('active');
            dots[currentSlide].classList.add('active');
        }

        function nextSlide() {
            showSlide(currentSlide + 1);
        }

        function goToSlide(n) {
            clearInterval(slideInterval);
            showSlide(n);
            slideInterval = setInterval(nextSlide, 5000);
        }
    </script>
    <script src="asset/js/script.js"></script>
</body>

</html>
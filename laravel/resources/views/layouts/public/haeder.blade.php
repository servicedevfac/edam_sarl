<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDAM SARL – Excellence & Professionnalisme</title>
    <link rel="stylesheet" href="{{ asset('asset/styles/style.css') }}">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    @stack('styles')
</head>

<body>

    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="top-info">
                <span><i class="fas fa-map-marker-alt"></i> Angré Djorogobité I non loin  du restaurant The BRIDGE LOUNGE</span>
            </div>
            <div class="social-dropdown">
                <div class="social-dropdown-btn">
                    <span>Nos Réseaux</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="social-dropdown-content">
                    <div class="dropdown-group">
                        <h5>EDAM Clean</h5>
                        <div class="dropdown-group-icons">
                            <a href="https://www.facebook.com/profile.php?id=61577193561934" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="http://www.instagram.com/edam.clean" title="Instagram"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.tiktok.com/@edam.clean" title="TikTok"><i class="fab fa-tiktok"></i></a>
                        </div>
                    </div>
                    <div class="dropdown-groupgift">
                        <h5 style="color: #ff71b8ff;">EDAM Gift</h5>
                        <div class="dropdown-group-iconsgift">
                            <a href="https://www.facebook.com/profile.php?id=61580002526478" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="http://www.instagram.com/edam.gift" title="Instagram"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.tiktok.com/@edam.gift8" title="TikTok"><i class="fab fa-tiktok"></i></a>
                        </div>
                    </div>
                </div>
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
        <div class="container" data-reveal="fade-up" data-delay="100">
            <div class="footer-grid">
                <div class="footer-col footer-about">
                    <h4>A Propos</h4>
                    <p>
                    EDAM S.A.R.L propose des services multisectoriels : équipements, nettoyage,
décoration, événements, import-export, formation et conseil. Nous offrons des
solutions fiables et adaptées pour particuliers et entreprises.</p>
                    <div class="social-links">
                        <a href="https://www.facebook.com/profile.php?id=61580002526478"><i class="fab fa-facebook-f"></i></a>
                        <a href="http://www.instagram.com/edam.gift"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.tiktok.com/@edam.gift8"><i class="fab fa-tiktok"></i></a>
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
                        <li><i class="fas fa-phone"></i>  +225 27 22 29 75 08</li>
                        <li><i class="fas fa-phone"></i>  +225 07 16 48 04 55</li>
                        <li><i class="fas fa-envelope"></i> infos@edamsarl.com</li>
                        <li><i class="fas fa-map-marker-alt"></i> Angré Djorogobité I non loin du restaurant The BRIDGE LOUNGE</li>
                        <li><i class="fas fa-clock"></i> Lun-Ven: 08H00 - 17H00</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                &copy; 2026 EDAM SARL Tous droits réservés. Designé par <a href="https://www.attouco.com/">FIRME ATTOU & CO</a>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const slides = document.querySelectorAll('.slide');
            const dots = document.querySelectorAll('.dot');
            
            if (slides.length > 0) {
                let currentSlide = 0;
                let slideInterval = setInterval(nextSlide, 5000);

                function showSlide(n) {
                    if (slides[currentSlide]) slides[currentSlide].classList.remove('active');
                    if (dots[currentSlide]) dots[currentSlide].classList.remove('active');
                    
                    currentSlide = (n + slides.length) % slides.length;
                    
                    if (slides[currentSlide]) slides[currentSlide].classList.add('active');
                    if (dots[currentSlide]) dots[currentSlide].classList.add('active');
                }

                function nextSlide() {
                    showSlide(currentSlide + 1);
                }

                window.goToSlide = function(n) {
                    clearInterval(slideInterval);
                    showSlide(n);
                    slideInterval = setInterval(nextSlide, 5000);
                }
            }
        });
    </script>
    <script src="{{ asset('asset/js/script.js') }}"></script>
    @stack('scripts')
</body>

</html>
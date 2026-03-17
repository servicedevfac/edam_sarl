@extends('layouts.public.haeder')
@section('content')
    <main>
        <!-- Hero Slider Section -->
        <section class="hero-slider">
            <div class="slides-container">
                
                <!-- Slide 2 -->
                <div class="slide active"
                    style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('asset/images/bureau.jpg') }}');">
                    <div class="container">
                        <div class="hero-content" style="color: white;">
                            <h1>EDAM CLEAN – Propreté Irréprochable</h1>
                            <p>Solutions de nettoyage industriel et résidentiel adaptées à vos exigences de qualité et de
                                rigueur.</p>
                            <br>
                            <a href="/edan-clean" class="btn btn-primary btn-small">Découvrir nos services</a>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="slide"
                    style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('asset/images/chantier.jpg') }}');">
                    <div class="container">
                        <div class="hero-content" style="color: white;">
                            <h1>EDAM GIFT – Émotion & Créativité</h1>
                            <p>Marquez les esprits avec nos cadeaux personnalisés uniques et de haute qualité.</p>
                            <br>
                            <a href="/edam_gift" class="btn btn-primary btn-small">Voir la collection</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hero-dots">
                <span class="dot active" onclick="goToSlide(0)"></span>
                <span class="dot" onclick="goToSlide(1)"></span>
                <span class="dot" onclick="goToSlide(2)"></span>
            </div>
        </section>

        <!-- About Section -->
        <section class="section-padding container reveal-up">
            <div class="about-grid">
                <div class="about-content">
                    <span class="about-tag">A propos de nous</span>
                    <h2>EDAM SARL, c'est</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit anim id est laborum.</p>
                    <br>
                    <a href="/about" class="btn btn-primary btn-small">Lire Plus</a>
                </div>
                <div class="about-image">
                    <img src="{{ asset('asset/images/ec62939e1e0730a960df138eae1812a06dd41603.jpg') }}" alt="Team working">
                </div>
            </div>
        </section>

        <!-- Stats Banner -->
        <section class="stats-banner reveal-fade">
            <div class="container">
                <div class="stats-grid">
                    <div class="stat-item">
                        <h3>25</h3>
                        <p>Partenaires</p>
                    </div>
                    <div class="stat-item">
                        <h3>32</h3>
                        <p>Projets finis</p>
                    </div>
                    <div class="stat-item">
                        <h3>500+</h3>
                        <p>Clients fidèles</p>
                    </div>
                    <div class="stat-item">
                        <h3>100%</h3>
                        <p>Satisfaction</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="section-padding services-section reveal-up">
            <div class="container">
                <div class="section-header">
                    <h2>Nos Services</h2>
                </div>
                <div class="services-grid">
                    <div class="service-card">
                        <div class="card-img card-clean">
                            <img src="asset/images/service1.png" alt="EDAM Clean">

                            <div class="card-title">
                                <h2>EDAM Clean</h2>
                            </div>
                        </div>
                        <div class="card-content">
                            <a href="#" class="btn btn-primary btn-small">Voir les details</a>
                        </div>
                    </div>
                    <div class="service-card">
                        <div class="card-img card-gift">
                            <img src="asset/images/service.png" alt="EDAM Gift">
                        </div>
                        <div class="card-content">
                            <a href="#" class="btn btn-primary btn-small">Voir le site</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Partners Ribbons -->
        <section class="partners-ribbon ">
            <div class="container partners-flex">
                <span>VISA</span>
                <i class="fab fa-tumblr"></i>
                <i class="fas fa-snowflake"></i>
                <i class="fab fa-windows"></i>
                <i class="fab fa-microsoft"></i>
                <i class="fab fa-slack"></i>
                <i class="fab fa-safari"></i>
                <i class="fab fa-openai"></i>
            </div>
        </section>

        <!-- Why Us Section -->
        <section class="section-padding container reveal-up">
            <div class="about-grid">
                <div class="about-image">
                    <img src="asset/images/1a9b30e45b5f6677ae76bacfb996aa37031d45a6.jpg" alt="Hands together">
                </div>
                <div class="about-content">
                    <h2>Pourquoi nous choisir ?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur.</p>
                </div>
            </div>
        </section>
    </main>

@endsection
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
@extends('layouts.public.haeder')

@push('styles')
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endpush

@push('scripts')
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper('.services-swiper', {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    640: { slidesPerView: 1.5 },
                    768: { slidesPerView: 2 },
                    1024: { slidesPerView: 3 },
                    1440: { slidesPerView: 4 }
                }
            });
        });
    </script>
@endpush

@section('content')
    <main>
        <!-- Hero Slider Section -->
        <section class="hero-slider">
            <div class="slides-container">
                <!-- Slide 1 -->
                <div class="slide active"
                    style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('asset/images/sarl.jpg') }}');">
                    <div class="container">
                        <div class="hero-content" style="color: white;">
                            <h1 class="animate__animated animate__fadeInDown" style="font-size: 40px;">EDAM SARL – Votre Vision, Notre Mission</h1>
                            <p class="animate__animated animate__fadeInUp animate__delay-1s">Nous transformons vos besoins en solutions concrètes avec professionnalisme et expertise.</p>
                            <br>
                            <a href="/about" class="btn btn-primary btn-small animate__animated animate__zoomIn animate__delay-2s">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="slide "
                    style="background-image:linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('asset/images/resi.jpg') }}');">
                    <div class="container">
                        <div class="hero-content" style="color: white;">
                            <h1 style="font-size: 40px;">EDAM CLEAN – Propreté Irréprochable</h1>
                            <p>Solutions de nettoyage industriel et résidentiel adaptées à vos exigences de qualité et de
                                rigueur.</p>
                            <br>
                            <a href="/edan-clean" class="btn btn-primary btn-small">Découvrir nos prestations</a>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                 <div class="slide"
                    style="background-image:linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('asset/images/gft1.jpg') }}'); ">
                    <div class="container">
                        <div class="hero-content" style="color: white;">
                            <h1 style="font-size: 40px;">EDAM GIFT – Émotion & Créativité</h1>
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
        <section class="section-padding container">
            <div class="about-grid">
                <div class="about-content" data-reveal="fade-right">
                    <span class="about-tag">A propos de nous</span>
                    <h2 data-reveal="fade-left" data-delay="200">EDAM SARL, c'est</h2>   
                    <p>EDAM S.A.R.L est une entreprise multisectorielle engagée à offrir des solutions
                    innovantes et adaptées aux besoins des particuliers, des entreprises et des
                    institutions. Forte de son expertise et de son dynamisme, elle intervient dans
                    plusieurs domaines afin d’apporter des services complets et de qualité
                    </p>
                    <p>Nous accompagnons nos clients dans la fourniture d’équipements, le nettoyage
                        professionnel, l’aménagement d’espaces, la décoration intérieure, ainsi que
                        l’organisation d’événements. Notre objectif est de garantir des prestations
                        fiables, efficaces et parfaitement adaptées à chaque projet.</p>
                    <br>
                    <a href="/about" class="btn btn-primary btn-small">Lire Plus</a>
                </div>
                <div class="about-image" data-reveal="fade-left">
                    <img src="{{ asset('asset/images/index1.jpg') }}" alt="Team working" style="max-width: 100%;">
                </div>
            </div>
        </section>

        <!-- Stats Banner -->
        <section class="stats-banner">
            <div class="container">
                <div class="stats-grid">
                    <div class="stat-item">
                        <h3 class="counter-value" data-target="1000">0</h3>
                        <p> prestations réalisées</p>
                    </div>
                    <div class="stat-item">
                        <h3 class="counter-value" data-target="500" data-prefix="+">+0</h3>
                        <p>Clients accompagnés</p>
                    </div>
                    <div class="stat-item">
                        <h3 class="counter-value" data-target="24" data-suffix="H">0H</h3>
                        <p>Disponible</p>
                    </div>
                    <div class="stat-item">
                        <h3 class="counter-value" data-target="100" data-suffix="%">0%</h3>
                        <p>Satisfaction</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Section -->
        <section class="services-section">
            <div class="container">
                <div class="section-header" style="text-align: center; justify-content: center; align-items: center;" data-reveal="fade-up" data-delay="100">
                    <h2>NOS SERVICES</h2>
                    
                </div>
            </div>  
            <div class="swiper services-swiper reveal-up">
                <div class="swiper-wrapper">
                    <!-- Service Slide 1 -->
                    <div class="swiper-slide" data-reveal="zoom-in" data-delay="100">
                        <div class="service-card-new edu">
                            <div class="card-icon-new"><i class="fas fa-briefcase"></i></div>
                            <h3>Nettoyage professionnel</h3>
                            <ul>
                                <li>Nettoyage industriel et résidentiel de haute qualité pour tous vos espaces.</li>
                                <li>Utilisation de produits écologiques et de techniques avancées de désinfection.</li>
                            </ul>
                            
                        </div>
                    </div>
                    <!-- Service Slide 2 -->
                    <div class="swiper-slide " data-reveal="zoom-in" data-delay="100">
                        <div class="service-card-new net" >
                            <div class="card-icon-new"><i class="fas fa-couch"></i></div>
                            <h3>Décoration intérieur</h3>
                            <ul>
                                <li>Aménagement d'espaces personnalisés alliant esthétique et fonctionnalité.</li>
                                <li>Conseils en design et choix de matériaux premium pour votre intérieur.</li>
                            </ul>
                            
                        </div>
                    </div>
                    <!-- Service Slide 3 -->
                    <div class="swiper-slide" data-reveal="zoom-in" data-delay="100">
                        <div class="service-card-new it">
                            <div class="card-icon-new"><i class="fas fa-calendar-check"></i></div>
                            <h3>Organisation d'évènements</h3>
                            <ul>
                                <li>Planification complète de vos évènements corporatifs et privés.</li>
                                <li>Gestion logistique et coordination pour une expérience mémorable.</li>
                            </ul>
                            
                        </div>
                    </div>
                    <!-- Service Slide 4 -->
                    <div class="swiper-slide" data-reveal="zoom-in" data-delay="100">
                        <div class="service-card-new edu">
                            <div class="card-icon-new"><i class="fas fa-tools"></i></div>
                            <h3>Fourniture d'équipements</h3>
                            <ul>
                                <li>Vente et installation d'équipements spécialisés pour divers secteurs.</li>
                                <li>Service après-vente et maintenance garantis pour votre matériel.</li>
                            </ul>
                            
                        </div>
                    </div>
                    <!-- Service Slide 5 -->
                    <div class="swiper-slide" data-reveal="zoom-in" data-delay="100">
                        <div class="service-card-new net">
                            <div class="card-icon-new"><i class="fas fa-ship"></i></div>
                            <h3>Import Export</h3>
                            <ul>
                                <li>Solutions de transport international et logistique transfrontalière.</li>
                                <li>Gestion douanière et optimisation de votre chaîne d'approvisionnement.</li>
                            </ul>
                            
                        </div>
                    </div>
                    <!-- Service Slide 6 -->
                    <div class="swiper-slide" data-reveal="zoom-in" data-delay="100">
                        <div class="service-card-new it">
                            <div class="card-icon-new"><i class="fas fa-chart-pie"></i></div>
                            <h3>Conseil & Stratégie</h3>
                            <ul>
                                <li>Accompagnement stratégique pour le développement de votre entreprise.</li>
                                <li>Analyse de marché et optimisation de vos processus opérationnels.</li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
                <!-- Pagination Dots -->
                <div class="swiper-pagination"></div>
            </div>
        </section>        <!-- Partners Ribbons -->
        <section class="partners-ribbon">
            <div class="container-fluid partners-flex" style="display:flex; justify-content:space-evenly; align-items:center; width:100%;">
                <i><a href="https://wadi-ci.com/home/"><img src="asset/images/image.png" alt="" height="80px" width="80px"></a></i>
                <i><a href="#"><img src="asset/images/image1.png" alt="" height="80px" width="80px"></a></i>
                <i><a href="https://www.attouco.com/"><img src="asset/images/image2.png" alt="" height="80px" width="100px"></a></i>
                <i><a href="#"><img src="asset/images/image3.png" alt="" height="80px" width="80px"></a></i>
            </div>
        </section>

        <!-- Why Us Section -->
        <section class="section-padding container" data-reveal="fade-up">
            <div class="about-grid">
                <div class="about-image" data-reveal="fade-right">
                    <img src="asset/images/index2.jpg" alt="Hands together">
                </div>
                <div class="about-content" data-reveal="fade-left">
                    <h2>Pourquoi nous choisir ?</h2>
                    <p>Choisir EDAM S.A.R.L, c’est faire le choix d’un partenaire fiable, capable de
                        répondre efficacement à tous vos besoins grâce à une expertise
                        multisectorielle. Nous mettons un point d’honneur à offrir des prestations de
                        qualité, adaptées à chaque client, tout en respectant les délais et les exigences
                        spécifiques de chaque projet.
                    </p>
                    <p>Notre approche repose sur l’écoute, la rigueur et l’innovation, afin de garantir
                        des résultats à la hauteur de vos attentes. Que ce soit pour la fourniture
                        d’équipements, le nettoyage, la décoration ou l’organisation d’événements,
                        nous vous accompagnons avec professionnalisme à chaque étape.
                        <div class="about-content-flex" style="display: flex; flex-direction: row; gap: 20px;justify-content: space-between;">
                        <div style="display: flex; flex-direction: column; gap: 10px;">
                            <div style="display: flex; align-items: center; gap: 10px;">
                                <img src="https://img.icons8.com/?size=100&id=123575&format=png&color=2196F3" alt="" height="20" width="20">
                                <span>Professionnalisme</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 10px;">
                                <img src="https://img.icons8.com/?size=100&id=123575&format=png&color=2196F3" alt="" height="20" width="20">
                                <span>Rapidité</span>
                            </div>
                        </div>
                        <div style="display: flex; flex-direction: column; gap: 10px;">
                        <div style="display: flex; align-items: center; gap: 10px;">
                                <img src="https://img.icons8.com/?size=100&id=123575&format=png&color=2196F3" alt="" height="20" width="20">
                                <span>Personnel qualifié</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 10px;">
                                <img src="https://img.icons8.com/?size=100&id=123575&format=png&color=2196F3" alt="" height="20" width="20">
                                <span>Satisfaction garantie</span>
                            </div>
                        </div>
                        </div>
                    </p>
                </div>
            </div>
        </section>
    </main>

@endsection
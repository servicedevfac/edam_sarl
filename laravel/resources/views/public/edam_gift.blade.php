@extends('layouts.public.haeder')
@section('content')
    <main>
        <!-- Gift Hero Section -->
        <section class="gift-hero reveal-fade">
            <div class="container">
                <div class="gift-hero-grid">
                    <div class="gift-hero-content">
                        <h1>EDAM GIFT</h1>
                        <p>Nous savons comment vous rendre heureux !</p>
                    </div>
                    <div class="gift-hero-image">
                        <!-- We use generate_image to create a premium gift box image if not available, 
                                 or use a placeholder if we find one. 
                                 Based on the user's reference, it's a pink gift box. -->
                        <img src="asset/images/git.png" alt="EDAM Gift Box">
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Intro & Why Choose Us Section -->
        <section class="section-padding container reveal-up">
            <div class="gift-intro">
                <h2>Bienvenue à EDAM GIFT</h2>
                <div class="intro-text">
                    <p>Nous sommes specialisés dans la conception de paniers cadeaux personnalisés et l'organisation d'evenements professionnels et privés.</p>
                    <p>Nous accompagnons entreprises, institutions, et particuliers dans la valorisation de leurs moments importants: évènements d'entreprise, celebrations privées, cadeaux d'affaires, fetes de fin d'année, lancements de produits, séminaires ou cérémonies.</p>
                </div>
            </div>

            <div class="why-choose-us">
                <div class="section-header">
                    <h2>Pourquoi nous choisir ?</h2>
                </div>
                <div class="features-grid">
                    <div class="feature-item">
                        <div class="feature-number">01</div>
                        <div class="feature-content">
                            <h3>Des paniers cadeaux uniques et personalisés</h3>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-number">02</div>
                        <div class="feature-content">
                            <h3>Une organisation d'évènements clé en main</h3>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-number">03</div>
                        <div class="feature-content">
                            <h3>Une entreprise locale et de proximité</h3>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-number">04</div>
                        <div class="feature-content">
                            <h3>Un accompagnement sur mesure</h3>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-number">05</div>
                        <div class="feature-content">
                            <h3>Le sens du detail et de l'elegance</h3>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-number">06</div>
                        <div class="feature-content">
                            <h3>Respect des délais et engagements</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Products Section -->
        <section class="section-padding container reveal-up">
            <div class="section-header">
                <h2>Nos Paniers Cadeaux</h2>
            </div>
            <div class="gift-products-grid">
                <!-- Product 1 -->
                <div class="gift-card">
                    <div class="gift-card-img">
                        <img src="asset/images/service.png" alt="Panier cadeau">
                    </div>
                    <div class="gift-card-info">
                        <h3>Panier cadeau</h3>
                        <a href="#" class="btn btn-gift">VOIR LE SITE</a>
                    </div>
                </div>
                <!-- Product 2 -->
                <div class="gift-card">
                    <div class="gift-card-img">
                        <img src="asset/images/service.png" alt="Panier cadeau">
                    </div>
                    <div class="gift-card-info">
                        <h3>Panier cadeau</h3>
                        <a href="#" class="btn btn-gift">VOIR LE SITE</a>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="gift-card">
                    <div class="gift-card-img">
                        <img src="asset/images/service.png" alt="Panier cadeau">
                    </div>
                    <div class="gift-card-info">
                        <h3>Panier cadeau</h3>
                        <a href="#" class="btn btn-gift">VOIR LE SITE</a>
                    </div>
                </div>
                <!-- Product 4 -->
                <div class="gift-card">
                    <div class="gift-card-img">
                        <img src="asset/images/service.png" alt="Panier cadeau">
                    </div>
                    <div class="gift-card-info">
                        <h3>Panier cadeau</h3>
                        <a href="#" class="btn btn-gift">VOIR LE SITE</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
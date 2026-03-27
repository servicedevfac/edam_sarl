@extends('layouts.public.haeder')
@section('content')
    <main>
        <!-- Gift Hero Section -->
        <section class="gift-hero">
            <div class="container">
                <div class="gift-hero-grid">
                    <div class="gift-hero-content" data-reveal="fade-right">
                        <h1>EDAM GIFT</h1>
                        <p>Nous savons comment vous rendre heureux !</p>
                    </div>
                    <div class="gift-hero-image" data-reveal="zoom-in" data-delay="200">
                        <img src="asset/images/git.png" alt="EDAM Gift Box" height="100%" width="100%" class="floating" style="position:block; bottom: 20px;" data-reveal="zoom-in" data-delay="200">
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Intro & Why Choose Us Section -->
        <section class="section-padding container" data-reveal="fade-up">
            <div class="gift-intro">
                <h2>Bienvenue à EDAM GIFT</h2>
                <div class="intro-text">
                    <p>Nous sommes spécialisée dans la conception de paniers cadeaux personnalisés
et l’organisation d’événements professionnels et privés. Nous accompagnons
entreprises, institutions et particuliers dans la valorisation de leurs moments
importants : événements d’entreprise, célébrations privées, cadeaux d’affaires,
fêtes de fin d’année, lancements de produits, séminaires ou cérémonies. Grâce
à une approche créative, personnalisée et rigoureuse, EDAM GIFT transforme
chaque occasion en une expérience mémorable, en tenant compte de vos
objectifs, de votre image et de votre budget. Choisir EDAM GIFT, c’est confier
vos projets à un partenaire fiable, attentif aux détails et engagé dans la réussite
de votre événement ou de votre action de communication.</p>
                    
                </div>
            </div>

            <div class="why-choose-us">
                <div class="section-header" style="text-align: center; justify-content: center; align-items: center;" data-reveal="fade-up" data-delay="100"    >
                    <h2>Pourquoi nous choisir ?</h2>
                </div>
                <div class="features-grid">
                    <div class="feature-item" data-reveal="fade-up" data-delay="100">
                        <div class="feature-number">01</div>
                        <div class="feature-content">
                            <h4>Des paniers cadeaux uniques et personalisés</h4>
                        </div>
                    </div>
                    <div class="feature-item" data-reveal="fade-up" data-delay="200">
                        <div class="feature-number">02</div>
                        <div class="feature-content">
                            <h4>Une organisation d'évènements clé en main</h4>
                        </div>
                    </div>
                    <div class="feature-item" data-reveal="fade-up" data-delay="300">
                        <div class="feature-number">03</div>
                        <div class="feature-content">
                            <h4>Une entreprise locale et de proximité</h4>
                        </div>
                    </div>
                    <div class="feature-item" data-reveal="fade-up" data-delay="100">
                        <div class="feature-number">04</div>
                        <div class="feature-content">
                            <h4>Un accompagnement sur mesure</h4>
                        </div>
                    </div>
                    <div class="feature-item" data-reveal="fade-up" data-delay="200">
                        <div class="feature-number">05</div>
                        <div class="feature-content">
                            <h4>Le sens du detail et de l'elegance</h4>
                        </div>
                    </div>
                    <div class="feature-item" data-reveal="fade-up" data-delay="300">
                        <div class="feature-number">06</div>
                        <div class="feature-content">
                            <h4>Respect des délais et engagements</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Products Section -->
        <section class="section-padding container" data-reveal="fade-up">
            <div class="section-header" style="text-align: center; justify-content: center; align-items: center; margin-bottom: 20px;" data-reveal="fade-up" data-delay="100">
                <h2>Nos Paniers Cadeaux</h2>
            </div>
            <div class="gift-products-grid">
                @if($produits->count() > 0)
                    @foreach ($produits as $produit)
                        <!-- Product Card -->
                        <div class="gift-card" data-reveal="fade-up" data-delay="{{ $loop->index * 100 + 100 }}">
                            <div class="gift-card-img">
                                <img src="{{ asset($produit->image) }}" alt="{{ $produit->nom }}">
                            </div>
                            <div class="gift-card-info">
                                <h3>{{ $produit->nom }}</h3>
                                <p>{{ $produit->prix }} FCFA</p>
                                <a href="#" class="btn btn-gift">VOIR LE SITE</a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="no-products" style="grid-column: 1 / -1; text-align: center; padding: 40px; background: #fff; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                        <p style="font-size: 1.2rem; color: #666;">Aucun panier cadeau disponible pour le moment.</p>
                    </div>
                @endif
            </div>
        </section>
    </main>

@endsection
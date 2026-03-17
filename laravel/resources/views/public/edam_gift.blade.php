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
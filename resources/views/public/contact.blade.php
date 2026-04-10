@extends('layouts.public.header')

@section('title', 'Contact')

@section('meta-description', 'Contactez EDAM SARL pour vos besoins en nettoyage, entretien et services professionnels à Abidjan. Réponse rapide et devis gratuit.')
@section('meta-keywords', 'contact EDAM SARL, devis nettoyage Abidjan, entreprise entretien Côte d’Ivoire, téléphone EDAM')

@section('content')
    <main>
        <!-- Page Header / Breadcrumb -->
        <section class="page-header">
            <div class="container">
                <h1>CONTACTEZ-NOUS</h1>
                <div class="breadcrumb">
                    <a href="index.html">Accueil</a> <i class="fas fa-chevron-right"></i> <span>Contact</span>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="section-padding container" data-reveal="fade-up">
            <div class="contact-grid">
                <!-- Contact Information -->
                <div class="contact-info-wrapper">
                    <div class="section-header" style="text-align: left; margin-bottom: 30px;">
                        <span class="about-tag">Nos Coordonnées</span>
                        <h2>PRENDRE CONTACT</h2>
                        <p>Nous sommes à votre écoute pour toute demande d'information ou de devis. N'hésitez pas à nous
                            contacter par téléphone, email ou en remplissant le formulaire.</p>
                    </div>

                    <div class="contact-cards">
                        <div class="contact-card" data-reveal="fade-up" data-delay="100">
                            <div class="card-icon"><i class="fas fa-phone-alt"></i></div>
                            <div class="card-text">
                                <h4>Téléphone</h4>
                                <p>+225 07 16 48 04 55</p>
                            </div>
                        </div>
                        <div class="contact-card" data-reveal="fade-up" data-delay="200">
                            <div class="card-icon"><i class="fas fa-envelope"></i></div>
                            <div class="card-text">
                                <h4>Email</h4>
                                <p>infos@edamsarl.com</p>
                            </div>
                        </div>
                        <div class="contact-card" data-reveal="fade-up" data-delay="300">
                            <div class="card-icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="card-text">
                                <h4>Adresse</h4>
                                <p>Angré Djorogobité I non loin du restaurant The BRIDGE LOUNGE</p>
                            </div>
                        </div>
                        <div class="contact-card" data-reveal="fade-up" data-delay="400">
                            <div class="card-icon"><i class="fas fa-clock"></i></div>
                            <div class="card-text">
                                <h4>Heures de bureau</h4>
                                <p>Lun-Ven: 08H00 - 17H00</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="contact-form-wrapper reveal-up" data-delay="500">
                @if (session('success'))
                    <div class="alert alert-success" style="background: #10b981; color: #fff; padding: 10px; border-radius: 5px; margin-bottom: 20px;"  >
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-error" style="background: #ef4444; color: #fff; padding: 10px; border-radius: 5px; margin-bottom: 20px;"  >
                        {{ session('error') }}
                    </div>
                @endif

                    <form action="{{ route('messages.store') }}" method="POST" class="contact-form"data-reveal="fade-up" data-delay="100">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="nom" placeholder="Votre Nom complet" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Votre Email" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" name="telephone" placeholder="Votre Téléphone" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="sujet" placeholder="Sujet" required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" placeholder="Votre Message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%; border:none;">Envoyer le Message</button>
                    </form>
                </div>
            </div>
        </section>

        <!-- Map Section -->
        <section class="map-section container reveal-up" data-reveal="fade-up" data-delay="100" style="margin-left: 0px; margin-right: 0px;">
            <div class="map-container" data-reveal="fade-up" data-delay="100">
            
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.1434586644823!2d-3.9279979!3d5.3951005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc193f53888806d%3A0x43d6fa134e0be6ea!2sEDAM%20SARL!5e0!3m2!1sfr!2sci!4v1773074560427!5m2!1sfr!2sci" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </main>

@endsection
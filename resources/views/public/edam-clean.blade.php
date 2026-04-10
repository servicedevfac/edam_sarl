@extends('layouts.public.header')

@section('title', 'A Propos')

@section('meta-description', 'Restez informé des dernières tendances et innovations en communication avec Firme Attou Co. Découvrez nos actualités, études de cas, projets récents et conseils pour booster votre stratégie de communication.')
@section('meta-keywords', 'actualités communication, tendances communication, actualités digitales, stratégies de communication, actualités de l\'agence')


@section('content')
    <main>
        <!-- Hero Section -->
        <section class="page-header clean-hero">
            <div class="bubbles">
                <div style="position: absolute; top: 50%; left: 50%;">
                    <img src="asset/images/bulle.gif" alt="bulle" height="200" width="200">
                </div>
                <div style="position: absolute; top: 25%; left: 20%;">
                    <img src="asset/images/bulle.gif" alt="bulle" height="150" width="150">
                </div>
                <div style="position: absolute; top: 45%; left: 75%;">
                    <img src="asset/images/bulle.gif" alt="bulle" height="150" width="150">
                </div>
                <div style="position: absolute; top: 0; left: 0;">
                    <img src="asset/images/bulle.gif" alt="bulle" height="100" width="100">
                </div>
            </div>
            <div class="container hero-flex">
                <div class="hero-left" data-reveal="fade-right">
                    <h1 class="hero-title">EDAM CLEAN</h1>
                    <p class="hero-subtitle">Avec EDAM CLEAN, nous vivons dans la propreté !</p>
                </div>
                <div class="hero-right" data-reveal="fade-left" style="position: absolute; top: 20%; left: 65%; ">
                    <img src="asset/images/clean.png" alt="Cleaning Supplies" class="hero-img floating">
                </div>
            </div>
        </section>

        
        <!-- About Section -->
        <section class="section-padding container reveal-up">
            <div class="about-clean-grid">
                <div class="about-clean-image reveal-left">
                    <img src="asset/images/clean1.jpg" alt="Nettoyage EDAM Clean">
                </div>
                <div class="about-clean-content reveal-right">
                    <span class="about-tag">A Propos d’EDAM Clean</span>
                    <h2>Brillez, on s’occupe du reste</h2>
                    <p>EDAM CLEANest une activité de nettoyage professionnel basée à Cocody,
Abidjan, spécialisée dans l’entretien de bureaux, immeubles, chantiers et locaux
professionnels. En tant que PME de proximité, nous offrons à nos clients un
service fiable, réactif et personnalisé. Nous accompagnons entreprises, syndics
et particuliers avec une seule priorité : garantir des espaces propres, sains et
valorisés, au quotidien comme lors d’interventions ponctuelles. Nos équipes
sont formées, encadrées et suivies régulièrement afin d’assurer une qualité
constante, le respect des délais et une exécution conforme aux attentes de nos
clients. Choisir EDAM CLEAN, c’est faire le choix d’un partenaire de confiance,
capable de s’adapter à vos besoins spécifiques tout en respectant votre
environnement de travail.
</p>
                </div>
            </div>
        </section>

        <!-- Services Grid Section -->
        <section class="section-padding container">
            <div class="section-header" style="text-align: center; justify-content: center; align-items: center;">
                <h2>NOS SERVICES</h2>
            </div>
            <div class="service-overlay-grid">
                <div class="overlay-card" data-reveal="fade-up" data-delay="100" style="background-image: url('asset/images/chantier.png');">
                    <div class="card-overlay">
                        <h3>Chantier</h3>
                        <div class="accent-line"></div>
                    </div>
                </div>
                <div class="overlay-card" data-reveal="fade-up" data-delay="200" style="background-image: url('asset/images/resi.jpg');">
                    <div class="card-overlay">
                        <h3>Residentiel</h3>
                        <div class="accent-line"></div>
                    </div>
                </div>
                <div class="overlay-card" data-reveal="fade-up" data-delay="300" style="background-image: url('asset/images/bureaux.jpg');">
                    <div class="card-overlay">
                        <h3>Bureau</h3>
                        <div class="accent-line"></div>
                    </div>
                </div>
                <div class="overlay-card" data-reveal="fade-up" data-delay="400" style="background-image: url('asset/images/industri.jpg');">
                    <div class="card-overlay">
                        <h3>Industriel</h3>
                        <div class="accent-line"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Methodology Section -->
        <section class="methodology-section section-padding reveal-up">
            <div class="container">
                <div class="section-header" style="text-align: center; justify-content: center; align-items: center;">
                    <h2>NOTRE METHODOLOGIE</h2>
                </div>
                <div class="methodology-grid">
                    <div class="step-box">
                        <span class="step-num">Etape 1</span>
                        <div class="step-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <h4>ANALYSE DU BESOIN</h4>
                        <p>Nous échangeons avec vous pour comprendre précisément vos besoins et définir les objectifs de
                            l'intervention.</p>
                    </div>
                    <div class="step-box">
                        <span class="step-num">Etape 2</span>
                        <div class="step-icon">
                            <i class="fas fa-file-invoice-dollar"></i>
                        </div>
                        <h4>PROPOSITION & DEVIS</h4>
                        <p>Nous établissons une offre détaillée, claire et adaptée à votre budget.</p>
                    </div>
                    <div class="step-box">
                        <span class="step-num">Etape 3</span>
                        <div class="step-icon">
                            <i class="fas fa-magic"></i>
                        </div>
                        <h4>INTERVENTION PROFESSIONNELLE</h4>
                        <p>Notre équipe qualifiée intervient selon le planning défini, avec du matériel
professionnel.</p>
                    </div>
                    <div class="step-box">
                        <span class="step-num">Etape 4</span>
                        <div class="step-icon">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <h4>CONTROLE & SATISFACTION</h4>
                        <p>Nous effectuons un contrôle qualité et nous assurons de votre entière
satisfaction.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Quote Form Section -->
        <section class="section-padding container reveal-up">
            <div class="section-header" style="text-align: center; justify-content: center; align-items: center;">
                <h2>AVEZ-VOUS BESOIN D’UN SERVICE DE NETTOYAGE ?</h2>
                <p>Veuillez remplir ce formulaire de devis</p>
            </div>
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
            <form class="quote-form" action="{{ route('devis.store') }}" method="POST">
                @csrf
                <div class="form-grid">
                    <div class="form-group">
                        <input name="nom" type="text" placeholder="Nom" required>
                    </div>
                    <div class="form-group">
                        <input name="prenom" type="text" placeholder="Prénom(s)" required>
                    </div>
                    <div class="form-group">
                        <input name="email" type="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input name="telephone" type="tel" placeholder="Téléphone" required>
                    </div>
                    <div class="form-group full-width" style="margin-right:15px;">  
                        <select name="service" required>
                            <option value="" disabled selected>Choisir un service</option>
                            <option value="chantier">Chantier</option>
                            <option value="residentiel">Residentiel</option>
                            <option value="bureau">Bureau</option>
                            <option value="industriel">Industriel</option>
                            <option value="autre">Autre</option>
                        </select>
                    </div>
                    <div class="form-group full-width">
                        <textarea name="message" placeholder="Message" rows="5" required></textarea>
                    </div>
                </div>
                <div class="form-submit">
                    <button type="submit" class="btn btn-primary" style="border: none;">Envoyer le devis</button>
                </div>
            </form>
        </section>
    </main>

@endsection
@extends('layouts.public.haeder')
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
            <div class="container hero-flex reveal-fade">
                <div class="hero-left" style="z-index: 2;">
                    <h1 class="hero-title">EDAM CLEAN</h1>
                    <p class="hero-subtitle">Avec EDAM CLEAN, nous vivons dans la propreté !</p>
                </div>
                <div class="hero-right" style="position: absolute; top: 0%; left: 65%; ">
                    <img src="asset/images/clean.png" alt="Cleaning Supplies" class="hero-img">
                </div>
            </div>
        </section>

        
        <!-- About Section -->
        <section class="section-padding container reveal-up">
            <div class="about-clean-grid">
                <div class="about-clean-image">
                    <img src="asset/images/about-clean.png" alt="Nettoyage EDAM Clean">
                </div>
                <div class="about-clean-content">
                    <span class="about-tag">A Propos d’EDAM Clean</span>
                    <h2>Brillez, on s’occupe du reste</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
            </div>
        </section>

        <!-- Services Grid Section -->
        <section class="section-padding container">
            <div class="section-header">
                <h2>NOS SERVICES</h2>
            </div>
            <div class="service-overlay-grid">
                <div class="overlay-card" style="background-image: url('asset/images/chantier.jpg');">
                    <div class="card-overlay">
                        <h3>Chantier</h3>
                        <div class="accent-line"></div>
                    </div>
                </div>
                <div class="overlay-card" style="background-image: url('asset/images/batim.jpg');">
                    <div class="card-overlay">
                        <h3>Residentiel</h3>
                        <div class="accent-line"></div>
                    </div>
                </div>
                <div class="overlay-card" style="background-image: url('asset/images/bureau.jpg');">
                    <div class="card-overlay">
                        <h3>Bureau</h3>
                        <div class="accent-line"></div>
                    </div>
                </div>
                <div class="overlay-card" style="background-image: url('asset/images/industrie.jpg');">
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
                <div class="section-header">
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
                        <p>Nous échangeons avec vous pour comprendre précisément vos besoins et définir les objectifs de
                            l'intervention.</p>
                    </div>
                    <div class="step-box">
                        <span class="step-num">Etape 3</span>
                        <div class="step-icon">
                            <i class="fas fa-magic"></i>
                        </div>
                        <h4>INTERVENTION PROFESSIONNELLE</h4>
                        <p>Nous échangeons avec vous pour comprendre précisément vos besoins et définir les objectifs de
                            l'intervention.</p>
                    </div>
                    <div class="step-box">
                        <span class="step-num">Etape 4</span>
                        <div class="step-icon">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <h4>CONTROLE & SATISFACTION</h4>
                        <p>Nous échangeons avec vous pour comprendre précisément vos besoins et définir les objectifs de
                            l'intervention.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Quote Form Section -->
        <section class="section-padding container reveal-up">
            <div class="section-header">
                <h2>AVEZ-VOUS BESOIN D’UN SERVICE DE NETTOYAGE ?</h2>
                <p>Veuillez remplir ce formulaire de devis</p>
            </div>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if(session('error'))
                <div class="alert alert-error">
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
                    <div class="form-group full-width">
                        <select name="service" required>
                            <option value="" disabled selected>Choisir un service</option>
                            <option value="chantier">Chantier</option>
                            <option value="residentiel">Residentiel</option>
                            <option value="bureau">Bureau</option>
                            <option value="industriel">Industriel</option>
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
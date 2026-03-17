@extends('layouts.public.haeder')
@section('content')

    <main>
        <!-- Page Header / Breadcrumb -->
        <section class="page-header reveal-fade">
            <div class="container">
                <h1>A PROPOS DE NOUS</h1>
                <div class="breadcrumb">
                    <a href="index.html">Accueil</a> <i class="fas fa-chevron-right"></i> <span>A Propos</span>
                </div>
            </div>
        </section>

        <!-- Who We Are Section -->
        <section class="section-padding container reveal-up">
            <div class="about-grid">
                <div class="about-content">
                    <span class="about-tag">Notre Societe</span>
                    <h2>QUI SOMMES-NOUS ?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <a href="#" class="btn btn-primary  btn-small">Contactez-nous</a>
                </div>
                <div class="about-image">
                    <img src="asset/images/6fae210c200b41557e08526a547f092ff426249c.jpg" alt="Team collaborating">
                </div>
            </div>
        </section>

        <!-- Vision & Mission Section -->
        <section class="vision-mission-section">
            <div class="container">
                <!-- Vision -->
                <div class="vm-row">
                    <div class="vm-image">
                        <img src="asset/images/vison.jpg" alt="Vision">
                    </div>
                    <div class="vm-content">
                        <h2>NOTRE VISION</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                </div>

                <div class="divider"></div>

                <!-- Mission -->
                <div class="vm-row">
                    <div class="vm-image">
                        <img src="asset/images/mission.jpg" alt="Mission">
                    </div>
                    <div class="vm-content">
                        <h2>NOTRE MISSION</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Values Section -->
        <section class="section-padding container">
            <div class="section-header">
                <h2>NOS VALEURS</h2>
            </div>
            <div class="values-grid">
                <div class="value-item">
                    <div class="value-icon"><i class="fas fa-shield-alt"></i></div>
                    <h3>INTEGRITE</h3>
                </div>
                <div class="value-item">
                    <div class="value-icon"><i class="fas fa-star"></i></div>
                    <h3>QUALITE</h3>
                </div>
                <div class="value-item">
                    <div class="value-icon"><i class="fas fa-bolt"></i></div>
                    <h3>REACTIVITE</h3>
                </div>
                <div class="value-item">
                    <div class="value-icon"><i class="fas fa-hands-helping"></i></div>
                    <h3>ENGAGEMENT CLIENT</h3>
                </div>
                <div class="value-item">
                    <div class="value-icon"><i class="fas fa-users"></i></div>
                    <h3>PROFESSIONNALISME</h3>
                </div>
                <div class="value-item">
                    <div class="value-icon"><i class="fas fa-lock"></i></div>
                    <h3>CONFIANCE</h3>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="team-section section-padding reveal-up">
            <div class="container">
                <div class="section-header">
                    <h2>NOTRE EQUIPE</h2>
                </div>
                <div class="team-grid">
                    <div class="team-member">
                        <img src="asset/images/personl.jpg" alt="Directeur Général">
                        <div class="team-member-overlay">
                            <span>Directeur Général</span>
                        </div>
                    </div>
                    <div class="team-member">
                        <img src="asset/images/personl.jpg" alt="Chef de Projet">
                        <div class="team-member-overlay">
                            <span>Chef de Projet</span>
                        </div>
                    </div>
                    <div class="team-member">
                        <img src="asset/images/personl.jpg" alt="Responsable Technique">
                        <div class="team-member-overlay">
                            <span>Responsable Technique</span>
                        </div>
                    </div>
                    <div class="team-member">
                        <img src="asset/images/personl.jpg" alt="Assistante Administrative">
                        <div class="team-member-overlay">
                            <span>Assistante Administrative</span>
                        </div>
                    </div>


                </div>
            </div>
        </section>
    </main>

@endsection
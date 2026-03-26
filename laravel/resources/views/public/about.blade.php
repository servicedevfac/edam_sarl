@extends('layouts.public.haeder')
@section('content')

    <main>
        <!-- Page Header / Breadcrumb -->
        <section class="page-header" data-reveal="fade-down">
            <div class="container">
                <h1>A PROPOS DE NOUS</h1>
                <div class="breadcrumb">
                    <a href="index.html">Accueil</a> <i class="fas fa-chevron-right"></i> <span>A Propos</span>
                </div>
            </div>
        </section>

        <!-- Who We Are Section -->
        <section class="section-padding container" data-reveal="fade-up">
            <div class="about-grid">
                <div class="about-content">
                    <span class="about-tag">Notre Societe</span>
                    <h2>QUI SOMMES-NOUS ?</h2>
                    <p>EDAM S.A.R.L est une entreprise multisectorielle engagée à offrir des solutions
innovantes et adaptées aux besoins des particuliers, des entreprises et des
institutions. Forte de son expertise et de son dynamisme, elle intervient dans
plusieurs domaines afin d’apporter des services complets et de qualité
</p>
                    <p>Nous accompagnons nos clients dans la fourniture d’équipements, le nettoyage
professionnel, l’aménagement d’espaces, la décoration intérieure, ainsi que
l’organisation d’événements. Notre objectif est de garantir des prestations
fiables, efficaces et parfaitement adaptées à chaque projet</p>
<p>
Grâce à une équipe compétente et passionnée, EDAM S.A.R.L met un point
d’honneur à satisfaire ses clients en respectant les délais, en assurant un suivi
rigoureux et en proposant des solutions sur mesure.

</p>
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
                <div class="vm-row" data-reveal="fade-right">
                    <div class="vm-image">
                        <img src="asset/images/vison.jpg" alt="Vision">
                    </div>
                    <div class="vm-content">
                        <h2>NOTRE VISION</h2>
                        <p>Notre ambition est de devenir un acteur de référence en Côte d’Ivoire et en
Afrique de l’Ouest dans le domaine des services intégrés. Nous aspirons à bâtir
une entreprise reconnue pour sa rigueur, son innovation et son sens des
responsabilités.</p>
<p>EDAM S.A.R.L souhaite contribuer activement au développement économique
et social en proposant des solutions modernes, efficaces et durables, au service
de ses partenaires et de sa communauté</p>
                    </div>
                </div>

                <div class="divider"></div>

                <!-- Mission -->
                <div class="vm-row" data-reveal="fade-left">
                    <div class="vm-image">
                        <img src="asset/images/mission.jpg" alt="Mission">
                    </div>
                    <div class="vm-content">
                        <h2>NOTRE MISSION</h2>
                        <p>Chez EDAM S.A.R.L, notre mission est d’accompagner efficacement les
particuliers et les entreprises en leur proposant des solutions complètes, fiables
et innovantes. Nous nous engageons à comprendre chaque besoin afin
d’apporter des réponses sur mesure, adaptées aux exigences de chaque projet.</p>
<p>
À travers la qualité de nos services et notre sens du détail, nous visons à créer
de la valeur durable pour nos clients, tout en garantissant professionnalisme,
réactivité et satisfaction.
</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Values Section -->
        <section class="section-padding container reveal-up">
            <div class="section-header">
                <h2>NOS VALEURS</h2>
            </div>
            <div class="values-grid">
                <div class="value-item" data-reveal="fade-up" data-delay="100">
                    <div class="value-icon"><i class="fas fa-shield-alt"></i></div>
                    <h3>INTEGRITE</h3>
                </div>
                <div class="value-item" data-reveal="fade-up" data-delay="200">
                    <div class="value-icon"><i class="fas fa-star"></i></div>
                    <h3>QUALITE</h3>
                </div>
                <div class="value-item" data-reveal="fade-up" data-delay="300">
                    <div class="value-icon"><i class="fas fa-bolt"></i></div>
                    <h3>REACTIVITE</h3>
                </div>
                <div class="value-item" data-reveal="fade-up" data-delay="400">
                    <div class="value-icon"><i class="fas fa-hands-helping"></i></div>
                    <h3>ENGAGEMENT CLIENT</h3>
                </div>
                <div class="value-item" data-reveal="fade-up" data-delay="500">
                    <div class="value-icon"><i class="fas fa-users"></i></div>
                    <h3>PROFESSIONNALISME</h3>
                </div>
                <div class="value-item" data-reveal="fade-up" data-delay="600">
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
                    <div class="team-member" data-reveal="zoom-in" data-delay="100">
                        <img src="asset/images/personl.jpg" alt="Directeur Général">
                        <div class="team-member-overlay">
                            <span style="font-size: var(--fs-lg); font-weight: 700; text-transform: uppercase; text-align: center; color: var(--white);">Directeur Général</span>
                        </div>
                    </div>
                    <div class="team-member" data-reveal="zoom-in" data-delay="200">
                        <img src="asset/images/personl.jpg" alt="Chef de Projet">
                        <div class="team-member-overlay">
                            <span style="font-size: var(--fs-lg); font-weight: 700; text-transform: uppercase; text-align: center; color: var(--white);">Chef de Projet</span>
                        </div>
                    </div>
                    <div class="team-member" data-reveal="zoom-in" data-delay="300">
                        <img src="asset/images/personl.jpg" alt="Responsable Technique">
                        <div class="team-member-overlay">
                            <span style="font-size: var(--fs-lg); font-weight: 700; text-transform: uppercase; text-align: center; color: var(--white);">Responsable Technique</span>
                        </div>
                    </div>
                    <div class="team-member" data-reveal="zoom-in" data-delay="400">
                        <img src="asset/images/personl.jpg" alt="Assistante Administrative">
                        <div class="team-member-overlay">
                            <span style="font-size: var(--fs-lg); font-weight: 700; text-transform: uppercase; text-align: center; color: var(--white);">Assistante Administrative</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
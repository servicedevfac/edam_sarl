@extends('layouts.public.header')

@section('title', 'Galerie')

@section('meta-description', 'Découvrez en images les réalisations de EDAM SARL : nettoyage, entretien et services professionnels à Abidjan.')
@section('meta-keywords', 'galerie EDAM SARL, photos nettoyage Abidjan, réalisations entreprise, entretien locaux images')

@section('content')
    <main>
        <!-- Gallery Hero -->
        <section class="gallery-hero" style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('asset/images/gall.jpg') }}');">
            <div class="container">
                    <h1>GALERIE PHOTOS</h1>
                    <div class="breadcrumb">
                        <a href="index.html">Accueil</a> <i class="fas fa-chevron-right"></i> <span>Galerie</span>

                </div>
            </div>
        </section>
        <!-- Gallery Section -->
        <section class="section-padding container" data-reveal="fade-up">
            <div class="container">
                <div class="gallery-grid">
                    @forelse ($galleries as $gallery)
                    <div class="gallery-item" data-reveal="zoom-in" data-delay="{{ $loop->index * 100 }}">
                        <img src="{{ asset($gallery->image) }}" alt="{{ $gallery->titre }}">
                        <div class="gallery-overlay">
                            <span style="font-size: var(--fs-lg); font-weight: 700; text-transform: uppercase; text-align: center; color: var(--white);">{{ $gallery->titre }}</span>
                        </div>
                    </div>
                    @empty
                        <div style="grid-column: 1 / -1; text-align: center; padding: 40px; background: #fff; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                            <p style="font-size: 1.2rem; color: #666;">Aucune image disponible dans la galerie pour le moment.</p>
                        </div>
                    @endforelse
                </div>
                <!-- Pagination -->
                @if($galleries->hasPages())
                    <div class="gallery-pagination" style="margin-top: 40px;">
                        {{ $galleries->links() }}
                    </div>
                @endif
                  
            </div>
        </section>
        <section class="partners-ribbon" style="margin-top: 20px; margin-bottom: 20px;" data-reveal="fade-up">
            <div class="container-fluid partners-flex" style="display:flex; justify-content:space-evenly; align-items:center; width:100%;">
                <i><a href="https://wadi-ci.com/home/"><img src="asset/images/image.png" alt="" height="80px" width="80px"></a></i>
                <i><a href="#"><img src="asset/images/image1.png" alt="" height="80px" width="80px"></a></i>
                <i><a href="https://www.attouco.com/"><img src="asset/images/image2.png" alt="" height="80px" width="100px"></a></i>
                <i><a href="#"><img src="asset/images/image3.png" alt="" height="80px" width="100px"></a></i>
            </div>
        </section>

        <!-- Lightbox Modal -->
        <div id="gallery-lightbox" class="lightbox">
            <span class="close-lightbox">&times;</span>
            <img class="lightbox-content" id="lightbox-img">
            <div id="lightbox-caption"></div>
        </div>

    </main>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const lightbox = document.getElementById('gallery-lightbox');
            const lightboxImg = document.getElementById('lightbox-img');
            const lightboxCaption = document.getElementById('lightbox-caption');
            const closeBtn = document.querySelector('.close-lightbox');
            const galleryItems = document.querySelectorAll('.gallery-item');

            galleryItems.forEach(item => {
                item.addEventListener('click', () => {
                    const img = item.querySelector('img');
                    const title = item.querySelector('span').innerText;
                    
                    lightbox.style.display = 'flex';
                    lightboxImg.src = img.src;
                    lightboxCaption.innerText = title;
                    document.body.style.overflow = 'hidden'; // Prevent scrolling
                });
            });

            closeBtn.addEventListener('click', () => {
                lightbox.style.display = 'none';
                document.body.style.overflow = 'auto'; // Restore scrolling
            });

            // Close when clicking outside the image
            lightbox.addEventListener('click', (e) => {
                if (e.target === lightbox) {
                    lightbox.style.display = 'none';
                    document.body.style.overflow = 'auto';
                }
            });

            // Escape key to close
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && lightbox.style.display === 'flex') {
                    lightbox.style.display = 'none';
                    document.body.style.overflow = 'auto';
                }
            });
        });
    </script>

@endsection
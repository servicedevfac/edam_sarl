@extends('layouts.public.haeder')
@section('content')
    <main>
        <!-- Gallery Hero -->
        <section class="gallery-hero reveal-fade">
            <div class="container">
                    <h1>GALERIE PHOTOS</h1>
                    <div class="breadcrumb">
                        <a href="index.html">Accueil</a> <i class="fas fa-chevron-right"></i> <span>Galerie</span>

                </div>
            </div>
        </section>
        <!-- Gallery Section -->
        <section class="section-padding reveal-up">
            <div class="container">
                <div class="gallery-grid">
                  @foreach ($galleries as $gallery)
                  <div class="gallery-item">
                      <img src="{{ asset('images/' . $gallery->image) }}" alt="{{ $gallery->titre }}">
                      <div class="gallery-overlay">
                          <span style="font-size: var(--fs-lg); font-weight: 700; text-transform: uppercase; text-align: center; color: var(--white);">{{ $gallery->titre }}</span>
                      </div>
                  </div>
                  @endforeach
                    
                </div>
                <!-- Pagination -->
                <div class="gallery-pagination">
                    {{ $galleries->links('pagination::bootstrap-4') }}
                </div>
                  
            </div>
        </section>
        <section class="partners-ribbon reveal-fade" style="margin-top: 30px;margin-bottom: 30px;">
            <div class="container partners-flex">
                <span>VISA</span>
                <i class="fab fa-tumblr"></i>
                <i class="fas fa-snowflake"></i>
                <i class="fab fa-windows"></i>
                <i class="fab fa-microsoft"></i>
                <i class="fab fa-slack"></i>
                <i class="fab fa-safari"></i>
                <i class="fab fa-openai"></i>
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
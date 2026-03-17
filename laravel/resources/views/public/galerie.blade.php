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
                          <span>{{ $gallery->titre }}</span>
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
    </main>

@endsection
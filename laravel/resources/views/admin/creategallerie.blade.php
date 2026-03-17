@extends('layouts.admin.adminlayout')

@section('content')
<main class="admin-main">
    <header class="admin-header">
        <div class="header-profile" style="margin-left: auto;">
            <div class="profile-info">
                <img src="{{ asset('asset/images/personl.jpg') }}" alt="Admin">
                <span>Admin EDAM</span>
            </div>
        </div>
    </header>

    <div class="admin-content">
        <div class="admin-container">
            <div class="page-title-row">
                <h1>{{ isset($gallerie) ? 'Modifier' : 'Ajouter' }} une image</h1>
                <a href="{{ route('galleries.index') }}" class="btn-link"><i class="fas fa-arrow-left"></i> Retour à la liste</a>
            </div>

            <div class="admin-table-card" style="max-width: 600px; margin: 0 auto;">
                <form action="{{ isset($gallerie) ? route('galleries.update', $gallerie->id) : route('galleries.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(isset($gallerie))
                        @method('PUT')
                    @endif

                    <div style="margin-bottom: 20px;">
                        <label for="titre" style="display: block; margin-bottom: 8px; font-weight: 500;">Titre de l'image *</label>
                        <input type="text" id="titre" name="titre" value="{{ old('titre', isset($gallerie) ? $gallerie->titre : '') }}" required
                            style="width: 100%; padding: 10px 15px; border: 1px solid #ddd; border-radius: 5px;">
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label for="image" style="display: block; margin-bottom: 8px; font-weight: 500;">Fichier image {{ isset($gallerie) ? '' : '*' }}</label>
                        <input type="file" id="image" name="image" accept="image/*" {{ isset($gallerie) ? '' : 'required' }}
                            style="width: 100%; padding: 10px 15px; border: 1px solid #ddd; border-radius: 5px; background: #fafafa;">
                        
                        @if(isset($gallerie) && $gallerie->image)
                            <div style="margin-top: 15px;">
                                <p style="font-size: 0.9em; color: var(--text-muted); margin-bottom: 5px;">Image actuelle :</p>
                                <img src="{{ asset('images/' . $gallerie->image) }}" alt="Aperçu" style="max-width: 200px; border-radius: 5px; border: 1px solid #eee;">
                            </div>
                        @endif
                    </div>

                    <div style="margin-top: 30px; text-align: right;">
                        <button type="submit" class="btn btn-primary" style="padding: 10px 25px;">
                            {{ isset($gallerie) ? 'Enregistrer les modifications' : 'Ajouter l\'image' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection

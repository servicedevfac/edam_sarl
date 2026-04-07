@extends('layouts.admin.adminlayout')

@section('content')
<main class="admin-main">
    <header class="admin-header">
        <div class="header-profile" style="margin-left: auto;">
            <div class="profile-info">
                <img src="{{ asset('asset/images/personl.jpg') }}" alt="Admin">
                <h5>Admin EDAM</h5>
            </div>
        </div>
    </header>

    <div class="admin-content">
        <div class="admin-container">
            <div class="card-header" style="margin-bottom: 25px;">
                <a href="{{ route('galleries.index') }}" style="color: var(--dark-blue); text-decoration: none; display: inline-flex; align-items: center; gap: 8px; font-weight: 500; margin-bottom: 15px;">
                    <i class="fas fa-arrow-left"></i> Retour à la galerie
                </a>
                <h4>Modifier l'Image</h4>
            </div>

            <div class="admin-table-card" style="padding: 30px; max-width: 900px;">
                <form action="{{ route('galleries.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div style="display: flex; gap: 40px; align-items: flex-start;">
                        <div style="flex: 1;">
                            <div style="margin-bottom: 25px;">
                                <label for="titre" style="display: block; margin-bottom: 8px; font-weight: 600; color: var(--dark-blue);">Titre de l'image</label>
                                <input type="text" name="titre" id="titre" class="admin-input" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px;" value="{{ old('titre', $gallery->titre) }}" required>
                                @error('titre')
                                    <span style="color: #ff3b30; font-size: 0.85rem; margin-top: 5px; display: block;">{{ $message }}</span>
                                @enderror
                            </div>

                            <div style="margin-bottom: 25px;">
                                <label for="image" style="display: block; margin-bottom: 8px; font-weight: 600; color: var(--dark-blue);">Remplacer l'image (optionnel)</label>
                                <input type="file" name="image" id="image" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 8px; background: #fff;">
                                <p style="margin-top: 8px; color: #999; font-size: 0.8rem;">Laissez vide pour conserver l'image actuelle.</p>
                                @error('image')
                                    <span style="color: #ff3b30; font-size: 0.85rem; margin-top: 5px; display: block;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div style="flex: 1;">
                            <label style="display: block; margin-bottom: 8px; font-weight: 600; color: var(--dark-blue);">Image Actuelle</label>
                            <div style="position: relative;">
                                <img src="{{ asset($gallery->image) }}" alt="{{ $gallery->titre }}" style="width: 100%; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); border: 1px solid #eee;">
                                <div style="position: absolute; bottom: 10px; right: 10px; background: rgba(0,0,0,0.6); color: white; padding: 5px 10px; border-radius: 5px; font-size: 0.75rem;">
                                    Aperçu actuel
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="margin-top: 40px; border-top: 1px solid #eee; padding-top: 25px; display: flex; gap: 15px;">
                        <button type="submit" class="btn" style="background: var(--dark-blue); color: white; padding: 12px 30px; border: none; border-radius: 8px; font-weight: 600; cursor: pointer;">
                            ENREGISTRER LES MODIFICATIONS
                        </button>
                        <a href="{{ route('galleries.index') }}" class="btn" style="background: #eee; color: #666; padding: 12px 30px; border: none; border-radius: 8px; font-weight: 600; text-decoration: none; text-align: center;">
                            Annuler
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection

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
                <h4>Ajouter une Image</h4>
            </div>

            <div class="admin-table-card" style="padding: 30px; max-width: 800px;">
                <form action="{{ route('galleries.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div style="margin-bottom: 25px;">
                        <label for="titre" style="display: block; margin-bottom: 8px; font-weight: 600; color: var(--dark-blue);">Titre de l'image</label>
                        <input type="text" name="titre" id="titre" class="admin-input" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px;" placeholder="Ex: Notre équipe en intervention" required>
                        @error('titre')
                            <span style="color: #ff3b30; font-size: 0.85rem; margin-top: 5px; display: block;">{{ $message }}</span>
                        @enderror
                    </div>

                    <div style="margin-bottom: 25px;">
                        <label for="image" style="display: block; margin-bottom: 8px; font-weight: 600; color: var(--dark-blue);">Fichier Image</label>
                        <div style="border: 2px dashed #ddd; padding: 30px; border-radius: 10px; text-align: center; background: #fafafa;">
                            <i class="fas fa-cloud-upload-alt" style="font-size: 2.5rem; color: #ccc; margin-bottom: 15px; display: block;"></i>
                            <input type="file" name="image" id="image" required style="cursor: pointer;">
                            <p style="margin-top: 10px; color: #999; font-size: 0.85rem;">PNG, JPG, JPEG ou GIF (Max 2Mo)</p>
                        </div>
                        @error('image')
                            <span style="color: #ff3b30; font-size: 0.85rem; margin-top: 5px; display: block;">{{ $message }}</span>
                        @enderror
                    </div>

                    <div style="margin-top: 40px; border-top: 1px solid #eee; padding-top: 25px; display: flex; gap: 15px;">
                        <button type="submit" class="btn" style="background: var(--dark-blue); color: white; padding: 12px 30px; border: none; border-radius: 8px; font-weight: 600; cursor: pointer;">
                            PUBLIER L'IMAGE
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

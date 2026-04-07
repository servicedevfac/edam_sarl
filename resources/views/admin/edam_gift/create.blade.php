@extends('layouts.admin.adminlayout')

@section('content')
    <main class="admin-main">
        <header class="admin-header">
            <div class="header-search">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Rechercher...">
            </div>
            <div class="header-profile">
                <div class="profile-info">
                    <img src="{{ asset('asset/images/personl.jpg') }}" alt="Admin">
                    <span>Admin EDAM</span>
                </div>
            </div>
        </header>

        <div class="admin-content">
            <div class="admin-container">
                <div class="card-header" style="margin-bottom: 20px;">
                    <a href="{{ route('produits.index') }}" class="btn-link"><i class="fas fa-arrow-left"></i> Retour à la liste</a>
                    <h3>Ajouter un Nouveau Produit</h3>
                </div>

                <div class="admin-table-card" style="padding: 30px;">
                    <form action="{{ route('produits.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group" style="margin-bottom: 20px;">
                            <label for="nom" style="display: block; margin-bottom: 5px; font-weight: 600;">Nom du Produit</label>
                            <input type="text" name="nom" id="nom" class="admin-input" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;" required>
                        </div>

                        <div class="form-group" style="margin-bottom: 20px;">
                            <label for="prix" style="display: block; margin-bottom: 5px; font-weight: 600;">Prix (FCFA)</label>
                            <input type="text" name="prix" id="prix" class="admin-input" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;" required>
                        </div>

                        <div class="form-group" style="margin-bottom: 20px;">
                            <label for="image" style="display: block; margin-bottom: 5px; font-weight: 600;">Image</label>
                            <input type="file" name="image" id="image" class="admin-input" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;" placeholder="asset/images/service.png" required>
                        </div>

                        <div class="form-group" style="margin-bottom: 20px;">
                            <label for="description" style="display: block; margin-bottom: 5px; font-weight: 600;">Description</label>
                            <textarea name="description" id="description" rows="5" class="admin-input" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;" required></textarea>
                        </div>

                        <div class="form-actions" style="margin-top: 30px;">
                            <button type="submit" class="btn btn-primary" style="background: var(--pink-accent); color: white; padding: 12px 30px; border: none; border-radius: 5px; cursor: pointer; font-weight: 600;">
                                Enregistrer le Produit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection

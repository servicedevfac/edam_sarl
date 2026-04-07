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
                    <h4>Détails du Produit</h4>
                </div>

                <div class="admin-table-card" style="padding: 30px; display: flex; gap: 40px;">
                    <div class="product-image-large" style="flex: 1;">
                        <img src="{{ asset($produit->image) }}" alt="{{ $produit->nom }}" style="width: 100%; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                    </div>
                    <div class="product-details-info" style="flex: 2;">
                        <h2 style="font-size: 1.5rem; margin-bottom: 15px; color: var(--dark-blue);">{{ $produit->nom }}</h2>
                        <div class="price-tag" style="font-size: 1.rem; font-weight: 700; color: var(--pink-accent); margin-bottom: 25px;">
                            {{ $produit->prix }} FCFA
                        </div>
                        <div class="description-box" style="line-height: 1.6; color: #666; font-size: 1.1rem;">
                            <h4 style="color: #333; margin-bottom: 10px;">Description :</h4>
                            <p>{{ $produit->description }}</p>
                        </div>

                        <div class="info-actions" style="margin-top: 40px; display: flex; gap: 15px;">
                            <a href="{{ route('produits.edit', $produit->id) }}" class="btn" style="background: #2196F3; color: white; padding: 5px 25px; border-radius: 5px;">Modifier</a>
                            <form action="{{ route('produits.destroy', $produit->id) }}" method="POST" onsubmit="return confirm('Supprimer ce produit ?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn" style="background: #F44336; color: white; padding: 10px 25px; border: none; border-radius: 5px; cursor: pointer;">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@extends('layouts.admin.adminlayout')

@section('content')
    <main class="admin-main">
        <header class="admin-header">
            <div class="header-search">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Rechercher...">
            </div>
            <div class="header-profile">
                <div class="notifications">
                    <i class="fas fa-bell"></i>
                    <span class="badge">3</span>
                </div>
                <div class="profile-info">
                    <img src="{{ asset('asset/images/personl.jpg') }}" alt="Admin">
                    <span>Admin EDAM</span>
                </div>
            </div>
        </header>

        <div class="admin-content">
            <div class="admin-container">
                <div class="card-header" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                    <h3>Gestion des Produits (EDAM GIFT)</h3>
                    <a href="{{ route('produits.create') }}" class="btn btn-primary" style="background: var(--pink-accent); color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;">
                        <i class="fas fa-plus"></i> Nouveau Produit
                    </a>
                </div>

                @if(session('success'))
                    <div class="alert alert-success" style="padding: 15px; background: #d4edda; color: #155724; border-radius: 5px; margin-bottom: 20px;">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="admin-table-card">
                    <div class="table-responsive">
                        <table class="admin-table">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Nom</th>
                                    <th>Prix</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($produits as $produit)
                                    <tr>
                                        <td>
                                            <img src="{{ $produit->image }}" alt="{{ $produit->nom }}" style="width: 50px; height: 50px; object-fit: cover; border-radius: 5px;">
                                        </td>
                                        <td>{{ $produit->nom }}</td>
                                        <td>{{ $produit->prix }} FCFA</td>
                                        <td>{{ Str::limit($produit->description, 50) }}</td>
                                        <td>
                                            <a class="action-btn" href="{{ route('produits.show', $produit->id) }}"><i class="fas fa-eye"></i></a>
                                            <a class="action-btn" href="{{ route('produits.edit', $produit->id) }}"><i class="fas fa-edit"></i></a>
                                            <form action="{{ route('produits.destroy', $produit->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Supprimer ce produit ?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="action-btn delete"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" style="text-align: center;">Aucun produit trouvé</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="pagination" style="margin-top: 20px;">
                        {{ $produits->links() }}
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@extends('layouts.admin.adminlayout')

@section('content')
<main class="admin-main">
    <header class="admin-header">
        <div class="header-search">
            <form action="{{ route('galleries.index') }}" method="GET" style="position: relative; width: 100%;">
                <i class="fas fa-search" style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: #999;"></i>
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Rechercher une image..." style="width: 100%; padding: 10px 15px 10px 45px; border: 1px solid #eee; border-radius: 20px; background: #f8f9fa;">
            </form>
        </div>
        <div class="header-profile">
            <div class="profile-info">
                <img src="{{ asset('asset/images/personl.jpg') }}" alt="Admin">
                <h5>Admin EDAM</h5>
            </div>
        </div>
    </header>

    <div class="admin-content">
        <div class="admin-container">
            <div class="page-title-row" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px;">
                <h4>Gestion de la Galerie</h4>
                <a href="{{ route('galleries.create') }}" class="btn btn-primary" style="background: var(--dark-blue); color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;">
                    <i class="fas fa-plus"></i> Ajouter une image
                </a>
            </div>

            @if(session('success'))
                <div style="background: #d4edda; color: #155724; padding: 15px; border-radius: 8px; margin-bottom: 20px; border: 1px solid #c3e6cb;">
                    {{ session('success') }}
                </div>
            @endif

            <div class="admin-table-card">
                <div class="table-responsive">
                    <table class="admin-table">
                        <thead>
                            <tr>
                                <th>Aperçu</th>
                                <th>Titre</th>
                                <th>Date d'ajout</th>
                                <th style="text-align: right;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($galleries as $gallery)
                                <tr>
                                    <td>
                                        <img src="{{ asset($gallery->image) }}" alt="{{ $gallery->titre }}" style="width: 100px; height: 70px; object-fit: cover; border-radius: 8px; box-shadow: 0 3px 6px rgba(0,0,0,0.1);">
                                    </td>
                                    <td>
                                        <div style="font-weight: 600; color: var(--dark-blue);">{{ $gallery->titre }}</div>
                                    </td>
                                    <td style="color: #666; font-size: 0.9rem;">
                                        {{ $gallery->created_at->format('d/m/Y') }}
                                    </td>
                                    <td style="text-align: right;">
                                        <div style="display: flex; justify-content: flex-end; gap: 10px;">
                                            <a href="{{ route('galleries.edit', $gallery->id) }}" class="action-btn" title="Modifier" style="color: #2196F3;"><i class="fas fa-edit"></i></a>
                                            <form action="{{ route('galleries.destroy', $gallery->id) }}" method="POST" onsubmit="return confirm('Supprimer cette image de la galerie ?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="action-btn" title="Supprimer" style="color: #ff3b30; border: none; background: none; cursor: pointer;"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" style="text-align: center; padding: 40px; color: #999;">
                                        <i class="fas fa-images" style="font-size: 3rem; margin-bottom: 15px; display: block; opacity: 0.2;"></i>
                                        Aucune image dans la galerie.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                @if($galleries->hasPages())
                    <div style="padding: 20px; border-top: 1px solid #eee;">
                        {{ $galleries->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</main>
@endsection

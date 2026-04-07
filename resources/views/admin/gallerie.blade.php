@extends('layouts.admin.adminlayout')

@section('content')
<main class="admin-main">
    <header class="admin-header">
        <div class="header-search">
            <form action="{{ route('galleries.index') }}" method="GET" style="position: relative; width: 100%;">
                <i class="fas fa-search"
                    style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: var(--text-muted); padding: 0;"></i>
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Rechercher..."
                    style="width: 100%; padding: 10px 15px 10px 45px; border: 1px solid #eee; border-radius: 20px; background: #f8f9fa;">
            </form>
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
            <div class="page-title-row">
                <h4>Galeries d'images</h4>
                <a href="{{ route('galleries.create') }}" class="btn btn-primary btn-small"><i class="fas fa-plus"></i> Ajouter une image</a>
            </div>

            @if(session('success'))
                <div style="background-color: #d4edda; color: #155724; padding: 15px; margin-bottom: 20px; border-radius: 5px;">
                    {{ session('success') }}
                </div>
            @endif

            <div class="admin-table-card">
                <div class="table-responsive">
                    <table class="admin-table">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Titre</th>
                                <th>Date d'ajout</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($galleries as $gallerie)
                                <tr>
                                    <td>
                                        <img src="{{ asset('images/' . $gallerie->image) }}" alt="{{ $gallerie->titre }}" style="width: 80px; height: 60px; object-fit: cover; border-radius: 5px;">
                                    </td>
                                    <td><strong>{{ $gallerie->titre }}</strong></td>
                                    <td>{{ $gallerie->created_at ? $gallerie->created_at->format('d/m/Y') : 'N/A' }}</td>
                                    <td>
                                        <a href="{{ route('galleries.edit', $gallerie->id) }}" class="action-btn" title="Modifier"><i class="fas fa-edit"></i></a>
                                        <form action="{{ route('galleries.destroy', $gallerie->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Confirmer la suppression de cette image ?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="action-btn delete" title="Supprimer"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" style="text-align: center; padding: 20px;">Aucune image dans la galerie pour le moment.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="table-pagination" style="display: flex; justify-content: space-between; align-items: center; margin-top: 25px; padding-top: 20px; border-top: 1px solid #eee;">
                   @if($galleries->hasPages())
                     <span>Affichage de {{ $galleries->firstItem() ?? 0 }} à {{ $galleries->lastItem() ?? 0 }} sur {{ $galleries->total() }} résultats</span>
                     <div class="pagination-btns">
                         {{ $galleries->links() }}
                     </div>
                   @endif
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

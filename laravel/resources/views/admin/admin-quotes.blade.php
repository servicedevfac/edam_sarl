@extends('layouts.admin.adminlayout')
@section('content')

    <!-- Main Content -->
    <main class="admin-main">
        <header class="admin-header">
            <div class="header-search">
                <form action="{{ route('devis.index') }}" method="GET" style="position: relative; width: 100%;">
                    <i class="fas fa-search"
                        style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: var(--text-muted); padding: 0;"></i>
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Rechercher des devis..."
                        style="width: 100%; padding: 10px 15px 10px 45px; border: 1px solid #eee; border-radius: 20px; background: #f8f9fa;">
                    @if(request('statut'))
                        <input type="hidden" name="statut" value="{{ request('statut') }}">
                    @endif
                </form>
            </div>
            <div class="header-profile">
                <div class="notifications">
                    <i class="fas fa-bell"></i>
                    <span class="badge">3</span>
                </div>
                <div class="profile-info">
                    <img src="asset/images/personl.jpg" alt="Admin">
                    <span>Admin EDAM</span>
                </div>
            </div>
        </header>

        <div class="admin-content">
            <div class="admin-container">
                <div class="page-title-row">
                    <h1>Tous les Devis Reçus</h1>
                    <a href="{{ route('devis.export') }}" class="btn btn-primary btn-small"><i class="fas fa-download"></i>
                        Exporter CSV</a>
                </div>

                <div class="admin-table-card">
                    <div class="table-filters">
                        <form action="{{ route('devis.index') }}" method="GET" class="filter-group">
                            @if(request('search'))
                                <input type="hidden" name="search" value="{{ request('search') }}">
                            @endif
                            <label>Statut:</label>
                            <select name="statut" onchange="this.form.submit()">
                                <option value="Tous" {{ request('statut') == 'Tous' ? 'selected' : '' }}>Tous</option>
                                <option value="En attente" {{ request('statut') == 'En attente' ? 'selected' : '' }}>En
                                    attente</option>
                                <option value="Traité" {{ request('statut') == 'Traité' ? 'selected' : '' }}>Traité</option>
                            </select>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="admin-table">
                            <thead>
                                <tr>
                                    <th>Client</th>
                                    <th>Email / Mobile</th>
                                    <th>Service</th>
                                    <th>Date</th>
                                    <th>Statut</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($devis as $devi)
                                    <tr>
                                        <td><strong>{{ $devi->nom }}</strong></td>
                                        <td>{{ $devi->email }}<br><small>{{ $devi->telephone }}</small></td>
                                        <td>{{ $devi->service }}</td>
                                        <td>{{ $devi->created_at }}</td>
                                        <td><span
                                                class="status-badge {{ $devi->statut == 'En attente' ? 'pending' : 'approved' }}">{{ $devi->statut }}</span>
                                        </td>
                                        <td>
                                            <a href="{{ route('devis.show', $devi->id) }}" class="action-btn"><i
                                                    class="fas fa-eye"></i></a>
                                            <form action="{{ route('devis.destroy', $devi->id) }}" method="POST"
                                                style="display:inline;" onsubmit="return confirm('Supprimer ce devis ?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="action-btn delete"><i
                                                        class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="table-pagination"
                        style="display: flex; justify-content: space-between; align-items: center; margin-top: 25px; padding-top: 20px; border-top: 1px solid #eee;">
                        <span>Affichage de {{ $devis->firstItem() ?? 0 }} à {{ $devis->lastItem() ?? 0 }} sur
                            {{ $devis->total() }} entrées</span>
                        <div class="pagination-btns">
                            {{-- Previous Page Link --}}
                            @if ($devis->onFirstPage())
                                <button disabled><i class="fas fa-chevron-left"></i></button>
                            @else
                                <a href="{{ $devis->previousPageUrl() }}"><button><i
                                            class="fas fa-chevron-left"></i></button></a>
                            @endif

                            {{-- Pagination Elements --}}
                            @foreach ($devis->links()->elements as $element)
                                {{-- "Three Dots" Separator --}}
                                @if (is_string($element))
                                    <button disabled>{{ $element }}</button>
                                @endif

                                {{-- Array Of Links --}}
                                @if (is_array($element))
                                    @foreach ($element as $page => $url)
                                        @if ($page == $devis->currentPage())
                                            <button class="active">{{ $page }}</button>
                                        @else
                                            <a href="{{ $url }}"><button>{{ $page }}</button></a>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach

                            {{-- Next Page Link --}}
                            @if ($devis->hasMorePages())
                                <a href="{{ $devis->nextPageUrl() }}"><button><i class="fas fa-chevron-right"></i></button></a>
                            @else
                                <button disabled><i class="fas fa-chevron-right"></i></button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
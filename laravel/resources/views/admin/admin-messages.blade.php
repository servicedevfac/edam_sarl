@extends('layouts.admin.adminlayout')
@section('content')

    <!-- Main Content -->
    <main class="admin-main">
        <header class="admin-header">
            <div class="header-search">
                <form action="{{ route('messages.index') }}" method="GET" style="position: relative; width: 100%;">
                    <i class="fas fa-search"
                        style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: var(--text-muted); padding: 0;"></i>
                    <input type="text" name="search" value="{{ request('search') }}"
                        placeholder="Rechercher des messages..."
                        style="width: 100%; padding: 10px 15px 10px 45px; border: 1px solid #eee; border-radius: 20px; background: #f8f9fa;">
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
                    <h4>Tous les Messages Contact</h4>
                    <div class="header-actions">
                        <form action="{{ route('messages.markAllRead') }}" method="POST"
                            onsubmit="return confirm('Êtes-vous sûr de vouloir marquer tous les messages comme lus ?');">
                            @csrf
                            <button type="submit" class="btn btn-primary btn-small"><i
                                    class="fas fa-envelope-open-text"></i> Marquer
                                tout comme lu</button>
                        </form>
                    </div>
                </div>

                <div class="admin-table-card">
                    <div class="table-responsive">
                        <table class="admin-table">
                            <thead>
                                <tr>
                                    <th>Expéditeur</th>
                                    <th>Email</th>
                                    <th>Sujet</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($messages as $message)
                                    <tr class="unread">
                                        <td><strong>{{ $message->nom }}</strong></td>
                                        <td>{{ $message->email }}</td>
                                        <td>{{ $message->sujet }}</td>
                                        <td>{{ $message->created_at }}</td>
                                        <td><span
                                                class="status-badge {{ $message->status == 'Non lu' ? 'pending' : 'approved' }}">{{ $message->status }}</span>
                                        </td>
                                        <td>
                                            <a href="{{ route('messages.show', ['message' => $message->id]) }}"
                                                class="action-btn"><i class="fas fa-eye"></i></a>
                                            <form action="{{ route('messages.destroy', ['message' => $message->id]) }}"
                                                method="POST" style="display:inline;"
                                                onsubmit="return confirm('Supprimer ce message ?');">
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
                        <span>Affichage de {{ $messages->firstItem() ?? 0 }} à {{ $messages->lastItem() ?? 0 }} sur
                            {{ $messages->total() }} messages</span>
                        <div class="pagination-btns">
                            {{-- Previous Page Link --}}
                            @if ($messages->onFirstPage())
                                <button disabled><i class="fas fa-chevron-left"></i></button>
                            @else
                                <a href="{{ $messages->previousPageUrl() }}"><button><i
                                            class="fas fa-chevron-left"></i></button></a>
                            @endif

                            {{-- Pagination Elements --}}
                            @foreach ($messages->links()->elements as $element)
                                {{-- "Three Dots" Separator --}}
                                @if (is_string($element))
                                    <button disabled>{{ $element }}</button>
                                @endif

                                {{-- Array Of Links --}}
                                @if (is_array($element))
                                    @foreach ($element as $page => $url)
                                        @if ($page == $messages->currentPage())
                                            <button class="active">{{ $page }}</button>
                                        @else
                                            <a href="{{ $url }}"><button>{{ $page }}</button></a>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach

                            {{-- Next Page Link --}}
                            @if ($messages->hasMorePages())
                                <a href="{{ $messages->nextPageUrl() }}"><button><i
                                            class="fas fa-chevron-right"></i></button></a>
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
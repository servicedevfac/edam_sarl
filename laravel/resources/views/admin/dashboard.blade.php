@extends('layouts.admin.adminlayout')

@section('content')
    <!-- Main Content -->
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
                    <img src="asset/images/personl.jpg" alt="Admin">
                    <h5>Admin EDAM</h5>
                </div>
            </div>
        </header>

        <div class="admin-content">
            <div class="admin-container">
                <h1>Tableau de Bord</h1>

                <!-- Stats Grid -->
                <div class="admin-stats-grid">
                    <div class="stat-card">
                        <div class="stat-icon" style="background: rgba(33, 150, 243, 0.1); color: var(--primary-blue);">
                            <i class="fas fa-file-invoice-dollar"></i>
                        </div>
                        <div class="stat-details">
                            <h3>{{ $newDevisCount }}</h3>
                            <p>Nouveaux Devis</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon" style="background: rgba(233, 30, 99, 0.1); color: var(--pink-accent);">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="stat-details">
                            <h3>{{ $unreadMessagesCount }}</h3>
                            <p>Messages Non Lus</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon" style="background: rgba(76, 175, 80, 0.1); color: #4CAF50;">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="stat-details">
                            <h3>{{ $responseRate }}%</h3>
                            <p>Taux de Réponse</p>
                        </div>
                    </div>
                </div>

                <!-- Data Tables -->
                <div class="admin-tables-row">
                    <!-- Devis Table -->
                    <div class="admin-table-card" id="quotes">
                        <div class="card-header">
                            <h2>Devis Récents</h2>
                            <a href="{{ route('devis.index') }}" class="btn-link">Voir tout</a>
                        </div>
                        <div class="table-responsive">
                            <table class="admin-table">
                                <thead>
                                    <tr>
                                        <th>Client</th>
                                        <th>Service</th>
                                        <th>Date</th>
                                        <th>Statut</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($recentDevis as $devi)
                                        <tr>
                                            <td>{{ $devi->nom }}</td>
                                            <td>{{ $devi->service }}</td>
                                            <td>{{ $devi->created_at ? $devi->created_at->format('d/m/Y') : 'N/A' }}</td>
                                            <td><span
                                                    class="status-badge {{ $devi->statut == 'en attente' ? 'pending' : 'approved' }}">{{ ucfirst($devi->statut) }}</span>
                                            </td>
                                            <td>
                                                <a class="action-btn" href="{{ route('devis.show', ['devi' => $devi->id]) }}"><i
                                                        class="fas fa-eye"></i></a>
                                                <form action="{{ route('devis.destroy', ['devi' => $devi->id]) }}" method="POST"
                                                    style="display:inline;" onsubmit="return confirm('Supprimer ce devis ?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="action-btn delete"><i
                                                            class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" style="text-align: center;">Aucun devis récent</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Messages Table -->
                    <div class="admin-table-card" id="messages">
                        <div class="card-header">
                            <h2>Messages Contact</h2>
                            <a href="{{ route('messages.index') }}" class="btn-link">Voir tout</a>
                        </div>
                        <div class="table-responsive">
                            <table class="admin-table">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Sujet</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($recentMessages as $msg)
                                        <tr>
                                            <td>{{ $msg->nom }}</td>
                                            <td>{{ $msg->sujet }}</td>
                                            <td>{{ $msg->created_at ? $msg->created_at->format('d/m/Y') : 'N/A' }}</td>
                                            <td>
                                                <a class="action-btn"
                                                    href="{{ route('messages.show', ['message' => $msg->id]) }}"><i
                                                        class="fas fa-eye"></i></a>
                                                <form action="{{ route('messages.destroy', ['message' => $msg->id]) }}"
                                                    method="POST" style="display:inline;"
                                                    onsubmit="return confirm('Supprimer ce message ?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="action-btn delete"><i
                                                            class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" style="text-align: center;">Aucun message récent</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
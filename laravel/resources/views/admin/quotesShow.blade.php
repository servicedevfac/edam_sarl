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
                    <img src="{{ asset('asset/images/personl.jpg') }}" alt="Admin">
                    <span>Admin EDAM</span>
                </div>
            </div>
        </header>

        <div class="admin-content">
            <div class="admin-container">
                <div class="page-title-row">
                    <h1>Détails du Devis #{{ $devis->id }}</h1>
                    <a href="{{ route('devis.index') }}" class="btn btn-primary btn-small">
                        <i class="fas fa-arrow-left"></i> Retour à la liste
                    </a>
                </div>

                <div class="admin-table-card" style="padding: 30px;">
                    {{-- Status badge --}}
                    <div style="margin-bottom: 25px;">
                        <span class="status-badge {{ $devis->statut == 'en attente' ? 'pending' : 'approved' }}"
                            style="font-size: 14px; padding: 8px 16px;">
                            {{ $devis->statut }}
                        </span>
                    </div>

                    {{-- Client info grid --}}
                    <div
                        style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 25px; margin-bottom: 30px;">
                        <div>
                            <label
                                style="font-weight: 600; color: #888; font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px;">Nom
                                du client</label>
                            <p style="font-size: 16px; margin-top: 5px; font-weight: 500;">{{ $devis->nom }}</p>
                        </div>
                        <div>
                            <label
                                style="font-weight: 600; color: #888; font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px;">Email</label>
                            <p style="font-size: 16px; margin-top: 5px;">
                                <a href="mailto:{{ $devis->email }}"
                                    style="color: #2563eb; text-decoration: none;">{{ $devis->email }}</a>
                            </p>
                        </div>
                        <div>
                            <label
                                style="font-weight: 600; color: #888; font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px;">Téléphone</label>
                            <p style="font-size: 16px; margin-top: 5px;">
                                <a href="tel:{{ $devis->telephone }}"
                                    style="color: #2563eb; text-decoration: none;">{{ $devis->telephone }}</a>
                            </p>
                        </div>
                        <div>
                            <label
                                style="font-weight: 600; color: #888; font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px;">Service
                                demandé</label>
                            <p style="font-size: 16px; margin-top: 5px; font-weight: 500;">{{ $devis->service }}</p>
                        </div>
                        <div>
                            <label
                                style="font-weight: 600; color: #888; font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px;">Date
                                de réception</label>
                            <p style="font-size: 16px; margin-top: 5px;">
                                {{ $devis->created_at ? $devis->created_at->format('d/m/Y à H:i') : 'N/A' }}
                            </p>
                        </div>
                    </div>

                    {{-- Message --}}
                    <div style="border-top: 1px solid #e5e7eb; padding-top: 25px;">
                        <label
                            style="font-weight: 600; color: #888; font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px;">Message</label>
                        <div
                            style="margin-top: 10px; background: #f9fafb; border-radius: 8px; padding: 20px; line-height: 1.7; font-size: 15px;">
                            {{ $devis->message }}
                        </div>
                    </div>

                    {{-- Actions --}}
                    <div
                        style="border-top: 1px solid #e5e7eb; padding-top: 25px; margin-top: 25px; display: flex; gap: 15px; flex-wrap: wrap;">
                        @if($devis->statut == 'En attente')
                            <form action="{{ route('devis.update', ['devi' => $devis->id]) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="statut" value="traité">
                                <button type="submit" class="btn btn-primary btn-small" style="border: none;">
                                    <i class="fas fa-check"></i> Marquer comme traité
                                </button>
                            </form>
                        @else
                            <form action="{{ route('devis.update', ['devi' => $devis->id]) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="statut" value="En attente">
                                <button type="submit" class="btn btn-primary btn-small" style="background: #f59e0b; border: none;">
                                    <i class="fas fa-undo"></i> Remettre en attente
                                </button>
                            </form>
                        @endif

                        <form action="{{ route('devis.destroy', ['devi' => $devis->id]) }}" method="POST"
                            onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce devis ?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary btn-small" style="background: #ef4444; border: none;">
                                <i class="fas fa-trash"></i> Supprimer
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
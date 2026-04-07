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
                    <h1>Détails du Message #{{ $message->id }}</h1>
                    <a href="{{ route('messages.index') }}" class="btn btn-primary btn-small">
                        <i class="fas fa-arrow-left"></i> Retour à la liste
                    </a>
                </div>

                <div class="admin-table-card" style="padding: 30px;">
                    {{-- Status badge --}}
                    <div style="margin-bottom: 25px;">
                        <span class="status-badge {{ $message->status == 'Non lu' ? 'pending' : 'approved' }}"
                            style="font-size: 14px; padding: 8px 16px;">
                            {{ $message->status ?? 'Non lu' }}
                        </span>
                    </div>

                    {{-- Client info grid --}}
                    <div
                        style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 25px; margin-bottom: 30px;">
                        <div>
                            <label
                                style="font-weight: 600; color: #888; font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px;">Expéditeur</label>
                            <p style="font-size: 16px; margin-top: 5px; font-weight: 500;">{{ $message->nom }}</p>
                        </div>
                        <div>
                            <label
                                style="font-weight: 600; color: #888; font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px;">Email</label>
                            <p style="font-size: 16px; margin-top: 5px;">
                                <a href="mailto:{{ $message->email }}"
                                    style="color: #2563eb; text-decoration: none;">{{ $message->email }}</a>
                            </p>
                        </div>
                        <div>
                            <label
                                style="font-weight: 600; color: #888; font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px;">Téléphone</label>
                            <p style="font-size: 16px; margin-top: 5px;">
                                <a href="tel:{{ $message->telephone }}"
                                    style="color: #2563eb; text-decoration: none;">{{ $message->telephone }}</a>
                            </p>
                        </div>
                        <div>
                            <label
                                style="font-weight: 600; color: #888; font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px;">Sujet</label>
                            <p style="font-size: 16px; margin-top: 5px; font-weight: 500;">{{ $message->sujet }}</p>
                        </div>
                        <div>
                            <label
                                style="font-weight: 600; color: #888; font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px;">Date
                                de réception</label>
                            <p style="font-size: 16px; margin-top: 5px;">
                                {{ $message->created_at ? $message->created_at->format('d/m/Y à H:i') : 'N/A' }}</p>
                        </div>
                    </div>

                    {{-- Message Content --}}
                    <div style="border-top: 1px solid #e5e7eb; padding-top: 25px;">
                        <label
                            style="font-weight: 600; color: #888; font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px;">Message</label>
                        <div
                            style="margin-top: 10px; background: #f9fafb; border-radius: 8px; padding: 20px; line-height: 1.7; font-size: 15px;">
                            {{ $message->message }}
                        </div>
                    </div>

                    {{-- Actions --}}
                    <div
                        style="border-top: 1px solid #e5e7eb; padding-top: 25px; margin-top: 25px; display: flex; gap: 15px; flex-wrap: wrap;">
                        @if(isset($message->status) && $message->status == 'Non lu')
                            <form action="{{ route('messages.update', ['message' => $message->id]) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="status" value="Lu">
                                <button type="submit" class="btn btn-primary btn-small" style="border: none;">
                                    <i class="fas fa-check"></i> Marquer comme lu
                                </button>
                            </form>
                        @else
                            <form action="{{ route('messages.update', ['message' => $message->id]) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="status" value="Non lu">
                                <button type="submit" class="btn btn-primary btn-small"
                                    style="background: #f59e0b; border: none;">
                                    <i class="fas fa-undo"></i> Remettre en non lu
                                </button>
                            </form>
                        @endif

                        <form action="{{ route('messages.destroy', ['message' => $message->id]) }}" method="POST"
                            onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce message ?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary btn-small"
                                style="background: #ef4444; border: none;">
                                <i class="fas fa-trash"></i> Supprimer
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
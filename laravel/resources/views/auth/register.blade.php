<x-guest-layout>
    <div class="auth-header">
        <h2>Créer un compte</h2>
        <p>Rejoignez la plateforme EDAM SARL dès aujourd'hui</p>
    </div>

    <form method="POST" action="{{ route('register') }}" class="auth-form">
        @csrf

        <!-- Name -->
        <div class="auth-form-group">
            <label for="name" class="auth-label">Nom complet</label>
            <input id="name" class="auth-input" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" placeholder="Jean Dupont">
            @if ($errors->has('name'))
                <div class="auth-error">{{ $errors->first('name') }}</div>
            @endif
        </div>

        <!-- Email Address -->
        <div class="auth-form-group">
            <label for="email" class="auth-label">Adresse Email</label>
            <input id="email" class="auth-input" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" placeholder="votre@email.com">
            @if ($errors->has('email'))
                <div class="auth-error">{{ $errors->first('email') }}</div>
            @endif
        </div>

        <!-- Password -->
        <div class="auth-form-group">
            <label for="password" class="auth-label">Mot de passe</label>
            <input id="password" class="auth-input" type="password" name="password" required autocomplete="new-password" placeholder="••••••••">
            @if ($errors->has('password'))
                <div class="auth-error">{{ $errors->first('password') }}</div>
            @endif
        </div>

        <!-- Confirm Password -->
        <div class="auth-form-group">
            <label for="password_confirmation" class="auth-label">Confirmer le mot de passe</label>
            <input id="password_confirmation" class="auth-input" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="••••••••">
            @if ($errors->has('password_confirmation'))
                <div class="auth-error">{{ $errors->first('password_confirmation') }}</div>
            @endif
        </div>

        <div style="margin-top: 30px;">
            <button type="submit" class="btn-auth">
                S'INSCRIRE
            </button>
        </div>

        <div style="text-align: center; margin-top: 25px; font-size: 0.9rem; color: #666;">
            Déjà inscrit ? <a href="{{ route('login') }}" class="auth-link">Se connecter</a>
        </div>
    </form>
</x-guest-layout>

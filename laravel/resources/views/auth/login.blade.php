<x-guest-layout>
    <div class="auth-header">
        <h2>Bon retour !</h2>
        <p>Connectez-vous à votre compte EDAM SARL</p>
    </div>

    <!-- Session Status -->
    @if (session('status'))
        <div class="auth-status">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}" class="auth-form">
        @csrf

        <!-- Email Address -->
        <div class="auth-form-group">
            <label for="email" class="auth-label">Adresse Email</label>
            <input id="email" class="auth-input" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" placeholder="votre@email.com">
            @if ($errors->has('email'))
                <div class="auth-error">{{ $errors->first('email') }}</div>
            @endif
        </div>

        <!-- Password -->
        <div class="auth-form-group">
            <label for="password" class="auth-label">Mot de passe</label>
            <input id="password" class="auth-input" type="password" name="password" required autocomplete="current-password" placeholder="••••••••">
            @if ($errors->has('password'))
                <div class="auth-error">{{ $errors->first('password') }}</div>
            @endif
        </div>

        <!-- Remember Me & Forgot Password -->
        <div class="auth-footer-links">
            <label for="remember_me" class="remember-me">
                <input id="remember_me" type="checkbox" name="remember">
                <span>Se souvenir de moi</span>
            </label>
            @if (Route::has('password.request'))
                <a class="auth-link" href="{{ route('password.request') }}">
                    Mot de passe oublié ?
                </a>
            @endif
        </div>

        <div style="margin-top: 30px;">
            <button type="submit" class="btn-auth">
                SE CONNECTER
            </button>
        </div>

        <div style="text-align: center; margin-top: 25px; font-size: 0.9rem; color: #666;">
            Pas encore de compte ? <a href="{{ route('register') }}" class="auth-link">Créer un compte</a>
        </div>
    </form>
</x-guest-layout>

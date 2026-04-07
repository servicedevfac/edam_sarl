<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration - EDAM SARL</title>
    <link rel="icon" type="image/png" href="{{ asset('asset/images/logo.png') }}">
    <link rel="stylesheet" href="{{asset('/asset/styles/style.css')}}">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="admin-body">

    <div class="admin-wrapper">
        <!-- Sidebar -->
        <aside class="admin-sidebar">
            <div class="sidebar-header">
                <img src="{{asset('asset/images/logo.png')}}" alt="Logo">
                <h4>Admin Panel</h4>
            </div>
            <nav class="sidebar-nav">
                <ul>
                    <li><a href="{{route('dashboard')}}" class="active"><i class="fas fa-th-large"></i> Dashboard</a>
                    </li>
                    <li><a href="{{route('devis.index')}}"><i class="fas fa-file-invoice-dollar"></i> Devis Reçus</a>
                    </li>
                    <li><a href="{{route('messages.index')}}"><i class="fas fa-envelope"></i> Messages</a></li>
                    <li><a href="{{route('galleries.index')}}"><i class="fas fa-images"></i> Galerie</a></li>
                    <li><a href="{{route('produits.index')}}"><i class="fas fa-gifts"></i> Produits (Gift)</a></li>
                    <li><a href="/"><i class="fas fa-external-link-alt"></i> Voir le site</a></li>
                </ul>
            </nav>
            <div class="sidebar-footer">
                <form method="POST" action="{{ route('logout') }}" style="width: 100%;">
                    @csrf
                    <button type="submit"
                        style="background: none; border: none; color: rgba(255, 255, 255, 0.7); display: flex; align-items: center; gap: 10px; cursor: pointer; padding: 0; font-size: 16px; font-family: inherit;">
                        <i class="fas fa-sign-out-alt"></i> Déconnexion
                    </button>
                </form>
            </div>
        </aside>
        @yield('content')




    </div>

</body>

</html>
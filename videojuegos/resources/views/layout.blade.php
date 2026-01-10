<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'RetroGameHub - Videojuegos Clásicos')</title>
    @vite(['resources/css/app.css', 'resources/css/games-list.css'])
</head>
<body>
    <header>
        <h1>🎮 RetroGameHub</h1>
        <p>Descubre los videojuegos clásicos que marcaron historia</p>
    </header>

    <nav>
        <a href="{{ route('games.index') }}">📋 Lista de Juegos</a>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <p>&copy; 2026 RetroGameHub. Preservando la historia de los videojuegos.</p>
    </footer>
</body>
</html>

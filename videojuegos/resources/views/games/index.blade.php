@extends('layout')

@section('title', 'Lista de Videojuegos - RetroGameHub')

@section('content')
    <h2 class="page-title">Lista de Videojuegos Clásicos</h2>

    <div class="games-grid">
        @forelse($games as $game)
            <div class="game-card">
                <div class="game-card-header">
                    <h3>{{ $game['title'] }}</h3>
                    <div class="game-card-meta">{{ $game['console'] }} ({{ $game['year'] }})</div>
                </div>

                <div class="game-card-body">
                    <div class="game-info">
                        <p><strong>Género:</strong> {{ $game['genre'] }}</p>
                        <p><strong>Desarrollador:</strong> {{ $game['developer'] }}</p>
                        <p><strong>Año:</strong> {{ $game['year'] }}</p>
                    </div>

                    <p class="game-description">
                        {{ substr($game['description'], 0, 100) }}...
                    </p>

                    <a href="{{ route('games.show', $game['id']) }}" class="btn">
                        Ver Detalles →
                    </a>
                </div>
            </div>
        @empty
            <div class="empty-state">
                <p>No hay videojuegos disponibles.</p>
            </div>
        @endforelse
    </div>
@endsection

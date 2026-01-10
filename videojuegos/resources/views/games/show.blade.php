@extends('layout')

@section('title', $game['title'] . ' - RetroGameHub')

@section('content')
    <div class="game-detail">
        <div class="game-detail-header">
            <a href="{{ route('games.index') }}" class="btn-back">← Volver a la lista</a>
        </div>

        <div class="game-detail-content">
            <div class="game-detail-image">
                <img src="{{ asset('images/games/' . $game['image']) }}" alt="{{ $game['title'] }}">
            </div>

            <div class="game-detail-info">
                <h2 class="game-detail-title">{{ $game['title'] }}</h2>
                
                <div class="game-detail-meta">
                    <span class="badge">{{ $game['console'] }}</span>
                    <span class="badge">{{ $game['year'] }}</span>
                    <span class="badge badge-rating">⭐ {{ $game['rating'] }}</span>
                </div>

                <div class="game-detail-specs">
                    <div class="spec-item">
                        <span class="spec-label">Género</span>
                        <span class="spec-value">{{ $game['genre'] }}</span>
                    </div>
                    
                    <div class="spec-item">
                        <span class="spec-label">Desarrollador</span>
                        <span class="spec-value">{{ $game['developer'] }}</span>
                    </div>
                    
                    <div class="spec-item">
                        <span class="spec-label">Año de lanzamiento</span>
                        <span class="spec-value">{{ $game['year'] }}</span>
                    </div>
                    
                    <div class="spec-item">
                        <span class="spec-label">Jugadores</span>
                        <span class="spec-value">{{ $game['players'] }}</span>
                    </div>
                    
                    <div class="spec-item">
                        <span class="spec-label">Consola</span>
                        <span class="spec-value">{{ $game['console'] }}</span>
                    </div>
                </div>

                <div class="game-detail-description">
                    <h3>Descripción</h3>
                    <p>{{ $game['description'] }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection

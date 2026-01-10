<?php

namespace App\Http\Controllers;

class GameController extends Controller
{
    // Datos estáticos de videojuegos
    private $games = [
        [
            'id' => 1,
            'title' => 'Super Mario Bros',
            'year' => 1985,
            'console' => 'NES',
            'genre' => 'Plataformas',
            'developer' => 'Nintendo EAD',
            'description' => 'El clásico juego de plataformas que revolucionó la industria. Mario debe rescatar a la princesa Peach del castillo del Bowser.',
            'image' => 'mario.jpg',
            'players' => '1-2 jugadores',
            'rating' => '9.5/10'
        ],
        [
            'id' => 2,
            'title' => 'The Legend of Zelda',
            'year' => 1986,
            'console' => 'NES',
            'genre' => 'Aventura',
            'developer' => 'Nintendo EAD',
            'description' => 'Una epopeya de aventura y exploración. Link debe rescatar a la princesa Zelda y salvar el reino de Hyrule.',
            'image' => 'zelda.jpg',
            'players' => '1 jugador',
            'rating' => '9.8/10'
        ],
        [
            'id' => 3,
            'title' => 'Pac-Man',
            'year' => 1980,
            'console' => 'Arcade',
            'genre' => 'Arcade',
            'developer' => 'Namco',
            'description' => 'El icónico juego arcade donde controlas a Pac-Man mientras recoges puntos y huyes de los fantasmas.',
            'image' => 'pacman.jpg',
            'players' => '1-2 jugadores',
            'rating' => '9.0/10'
        ],
        [
            'id' => 4,
            'title' => 'Sonic the Hedgehog',
            'year' => 1991,
            'console' => 'Sega Genesis',
            'genre' => 'Plataformas',
            'developer' => 'Sonic Team',
            'description' => 'El erizo azul más rápido del universo de los videojuegos. Corre a través de zonas coloridas para detener al Dr. Robotnik.',
            'image' => 'sonic.jpg',
            'players' => '1 jugador',
            'rating' => '9.2/10'
        ],
        [
            'id' => 5,
            'title' => 'Street Fighter II',
            'year' => 1991,
            'console' => 'Arcade',
            'genre' => 'Lucha',
            'developer' => 'Capcom',
            'description' => 'El revolucionario juego de lucha que definió el género. Lucha contra jugadores de todo el mundo con tus personajes favoritos.',
            'image' => 'streetfighter.jpg',
            'players' => '1-2 jugadores',
            'rating' => '9.7/10'
        ],
        [
            'id' => 6,
            'title' => 'Tetris',
            'year' => 1984,
            'console' => 'Game Boy',
            'genre' => 'Puzzle',
            'developer' => 'Blue Planet Software',
            'description' => 'El adictivo juego de puzzles donde debes encajar bloques para completar líneas y sumar puntos.',
            'image' => 'tetris.jpg',
            'players' => '1 jugador',
            'rating' => '9.5/10'
        ]
    ];

    
     // lista de todos los videojuegos
     
    public function index()
    {
        return view('games.index', ['games' => $this->games]);
    }

    // Mostrar detalles de un videojuego específico
    public function show($id)
    {
        $game = collect($this->games)->firstWhere('id', (int)$id);
        
        if (!$game) {
            abort(404, 'Videojuego no encontrado');
        }
        
        return view('games.show', ['game' => $game]);
    }

}

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

// Ruta raíz redirige a la lista de juegos
Route::get('/', [GameController::class, 'index']);

// Ruta para lista de juegos
Route::get('/games', [GameController::class, 'index'])->name('games.index');

// Ruta para detalle de un juego
Route::get('/games/{id}', [GameController::class, 'show'])->name('games.show');

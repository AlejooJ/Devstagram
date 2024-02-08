<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

// Página principal
Route::get('/', function () {
    return view('principal');
});

// Crear cuenta
Route::get('/crear-cuenta', [RegisterController::class, 'index']);
Route::post('/crear-cuenta', [RegisterController::class, 'store']);

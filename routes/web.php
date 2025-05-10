<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaludoController;
use App\Http\Controllers\DespedidaController;
use App\Models\Libro;

Route::get('/bienvenido', function () {
    return view('welcome');
});

Route::get('/saludo', [SaludoController::class, 'saludo']);

Route::get('/despedida', [DespedidaController::class, 'despedida']);

Route::get('/libros', function () {
    // Recuperar todos los libros
    $libros = Libro::all();
    
    // Retornar una vista y pasar los libros a esa vista
    return view('libros.index', compact('libros'));
});

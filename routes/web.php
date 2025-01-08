<?php

use App\Http\Controllers\EntregaController;
use Illuminate\Support\Facades\Route;


Route::get('/', [EntregaController::class, 'index'])->name('home');
Route::post('/buscar', [EntregaController::class, 'buscar'])->name('buscar');
Route::get('/entrega/{id}', [EntregaController::class, 'detalhes'])->name('detalhes');
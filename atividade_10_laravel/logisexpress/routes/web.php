<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\EntregaController;

Route::get('/ola', function () {
    return 'olá, LogisExpress';
});

Route::get('/sobre', [PaginaController::class, 'sobre']);

Route::get('/entregas', [EntregaController::class, 'index']);
<?php

use Illuminate\Support\Facades\Route;

Route::post('/pessoa', [\App\Http\Controllers\PessoaController::class, 'store']);
Route::get('/pessoa', [\App\Http\Controllers\PessoaController::class, 'show']);

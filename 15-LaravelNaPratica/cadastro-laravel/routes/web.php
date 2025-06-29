<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuarioController;

Route::get('/', [UsuarioController::class, 'cadastrar'])->name('home');
Route::post('/salvar', [UsuarioController::class, 'salvar'])->name('salvar');

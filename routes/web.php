<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CentralController;

Route::get('/',[CentralController::class, 'Index'])->name('inicio');
Route::get('/jogos',[CentralController::class, 'BibliotecaJogos'])->name('jogos');

Route::get('/login',[CentralController::class, 'Login'])->name('login');
Route::get('/cadastro',[CentralController::class, 'Cadastro'])->name('cadastro');

Route::post('/cadastro',[CentralController::class, 'Cadastrar'])->name('cadastrar');
Route::post('/logar',[CentralController::class, 'Logar'])->name('logar');

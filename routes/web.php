<?php

use App\Models\Usuario;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

Route::get('/', function () {
    return view('welcome');});

Route::get('/sobre', [ AppController::class, 'sobre']);

Route::get('/base', function () {
    return view('base');
});

Route::get('/usuarios', [AppController::class, 'exibirUsuarios']);
Route::post('/add-usuario', [AppController::class, 'addUsuario']);

Route::get('/edit-usuario/{id}',[AppController::class, 'editUsuario']);

//update Usuario
Route::put('/atualizar/{id}', [AppController::class, 'atualizar']);

Route::delete('/del-usuario/{id}', [AppController::class, 'delUsuario']);

Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::get('/login', function () {
    return view(view: 'login');});
    
Route::post('login', [AppController::class, 'logar']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FotosController;

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/register', [RegisterController::class, 'create'])
    ->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');

Route::get('/login', [SessionsController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');

Route::post('/login', [SessionsController::class, 'store'])
    ->name('login.store');

Route::get('/logout', [SessionsController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');

Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');

Route::get('/clientes', [ClientesController::class, 'index'])
    ->name('clientes.index');

Route::get('/clientes/create', [ClientesController::class, 'create'])
    ->name('clientes.create');

Route::post('/clientes', [ClientesController::class, 'store'])
    ->name('clientes.store');

Route::get('/clientes/edit', [ClientesController::class, 'edit'])
    ->name('clientes.edit');
Route::get('/fotos', [FotosController::class, 'index'])
    ->name('fotos.index');

Route::get('/fotos/create', [FotosController::class, 'create'])
    ->name('fotos.create');

Route::post('/fotos-guardar', [FotosController::class, 'store'])
    ->name('fotos.store');
Route::get('/ver-foto/{id}', [FotosController::class, 'show'])
    ->name('fotos.show');

Route::get('/fotos/edit', [FotosController::class, 'edit'])
    ->name('fotos.edit');

Route::get('/cliente', [ClienteController::class, 'index'])
    ->name('cliente.index');

Route::post('/cliente-ver-fotos', [ClienteController::class, 'store'])
    ->name('cliente.store');

Route::get('/cliente-foto/{id}', [ClienteController::class, 'show'])
    ->name('cliente.show');
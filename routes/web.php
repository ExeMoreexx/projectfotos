<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FotosController;
use App\Http\Controllers\CartController;

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

Route::get('/clientes/edit/{id}', [ClientesController::class, 'edit'])
    ->name('clientes.edit');

Route::delete('/clientes/delete/{id}', [ClientesController::class, 'destroy'])
    ->name('clientes.destroy');

Route::get('/fotos', [FotosController::class, 'index'])
    ->name('fotos.index');
    
Route::get('/ver-foto/{id}', [FotosController::class, 'show'])
    ->name('fotos.show');

Route::get('/fotos/edit/{id}', [FotosController::class, 'edit'])
    ->name('fotos.edit');

Route::delete('/fotos/delete/{id}', [FotosController::class, 'destroy'])
    ->name('fotos.destroy');

Route::get('/cliente', [ClienteController::class, 'index'])
    ->name('cliente.index');

Route::post('/cliente-ver-fotos', [ClienteController::class, 'store'])
    ->name('cliente.store');

Route::get('/cliente-foto/{id}', [ClienteController::class, 'show'])
    ->name('cliente.show');

Route::get('/fotos/infantil', [FotosController::class, 'create_infantil'])
    ->name('fotos.create_infantil');

    Route::post('/guardar-foto-infantil', [FotosController::class, 'store_infantil'])
    ->name('fotos.store_infantil');

Route::get('/fotos/infantil-larga/{id}', [FotosController::class, 'create_infantil_larga'])
    ->name('fotos.create_infantil_larga');

Route::post('/guardar-foto-infantil-larga', [FotosController::class, 'store_infantil_larga'])
    ->name('fotos.store_infantil_larga');

Route::get('/fotos/credencial/{id}', [FotosController::class, 'create_credencial'])
    ->name('fotos.create_credencial');

Route::post('/guardar-foto-credencial', [FotosController::class, 'store_credencial'])
    ->name('fotos.store_credencial');

Route::get('/fotos/cartilla/{id}', [FotosController::class, 'create_cartilla'])
    ->name('fotos.create_cartilla');

Route::post('/guardar-foto-cartilla', [FotosController::class, 'store_cartilla'])
    ->name('fotos.store_cartilla');

Route::get('/fotos/credencial-larga/{id}', [FotosController::class, 'create_credencial_larga'])
    ->name('fotos.create_credencial_larga');

Route::post('/guardar-foto-credencial-larga', [FotosController::class, 'store_credencial_larga'])
    ->name('fotos.store_credencial_larga');

Route::get('/fotos/ovalo-credencial/{id}', [FotosController::class, 'create_ovalo_credencial'])
    ->name('fotos.create_ovalo_credencial');

Route::post('/guardar-foto-ovalo-credencial', [FotosController::class, 'store_ovalo_credencial'])
    ->name('fotos.store_ovalo_credencial');

Route::get('/fotos/pasaporte/{id}', [FotosController::class, 'create_pasaporte'])
    ->name('fotos.create_pasaporte');

Route::post('/guardar-foto-pasaporte', [FotosController::class, 'store_pasaporte'])
    ->name('fotos.store_pasaporte');

Route::get('/fotos/visa/{id}', [FotosController::class, 'create_visa'])
    ->name('fotos.create_visa');

Route::post('/guardar-foto-visa', [FotosController::class, 'store_visa'])
    ->name('fotos.store_visa');

Route::get('/fotos/patente-visita/{id}', [FotosController::class, 'create_patente_visita'])
    ->name('fotos.create_patente_visita');

Route::post('/guardar-foto-patente-visita', [FotosController::class, 'store_patente_visita'])
    ->name('fotos.store_patente_visita');

Route::get('/fotos/ovalo-diploma/{id}', [FotosController::class, 'create_ovalo_diploma'])
    ->name('fotos.create_ovalo_diploma');

Route::post('/guardar-foto-ovalo-diploma', [FotosController::class, 'store_ovalo_diploma'])
    ->name('fotos.store_ovalo_diploma');

Route::get('/fotos/ovalo-titulo/{id}', [FotosController::class, 'create_ovalo_titulo'])
    ->name('fotos.create_ovalo_titulo');

Route::post('/guardar-foto-ovalo-titulo', [FotosController::class, 'store_ovalo_titulo'])
    ->name('fotos.store_ovalo_titulo');

Route::get('/fotos/postal/{id}', [FotosController::class, 'create_postal'])
    ->name('fotos.create_postal');

Route::post('/guardar-foto-postal', [FotosController::class, 'store_postal'])
    ->name('fotos.store_postal');

Route::get('/fotos/ver-precio/{id}', [FotosController::class, 'verPrecio'])
    ->name('fotos.verPrecio');

Route::get('/carrito/{id}', [CartController::class, 'addCart'])
    ->name('cart.add');
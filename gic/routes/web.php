<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/proveedores', App\Http\Controllers\ProveedoreController::class);
Route::resource('/producto', App\Http\Controllers\ProductoController::class);
Route::resource('/cliente', App\Http\Controllers\ClienteController::class);
Route::resource('/venta', App\Http\Controllers\VentaController::class);
Route::resource('/compra', App\Http\Controllers\CompraController::class);

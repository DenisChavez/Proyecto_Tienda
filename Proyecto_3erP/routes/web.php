<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Cliente', function () {
    return view('Cliente.index');
});

Route::get('/Empleado', function () {
    return view('Empleado.index');
});

Route::resource('/Empleado/Producto','App\Http\Controllers\ProductoEController');

Route::get('Cliente/Producto', 'App\Http\Controllers\ProductoController@index')->name('cliente.producto');
Route::get('Cliente/Producto/{id}/edit', 'App\Http\Controllers\ProductoController@edit')->name('cliente.compra');
Route::get('Cliente/Producto/store', 'App\Http\Controllers\ProductoController@store')->name('carrito.producto');
Route::get('Cliente/Producto/mostrar', 'App\Http\Controllers\ProductoController@mostrar_carrito')->name('carrito');

//Route::resource('/Cliente/Producto','App\Http\Controllers\ProductoController');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

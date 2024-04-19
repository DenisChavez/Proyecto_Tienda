<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
    return view('Login.login');
});

Route::get('/Cliente', function () {
    return view('Cliente.index');
})->middleware('auth');


Route::get('/Empleado', function () {
    return view('Empleado.index');
});

Route::resource('/Empleado/Producto','App\Http\Controllers\ProductoEController');

Route::get('Cliente/Producto', 'App\Http\Controllers\ProductoController@index')->name('cliente.producto');
Route::get('Cliente/Producto/{id}/edit', 'App\Http\Controllers\ProductoController@edit')->name('cliente.compra');

Route::get('/', 'App\Http\Controllers\ProductoController@end')->name('cliente.end');
Route::get('Cliente/add-cart/{id}', 'App\Http\Controllers\ProductoController@agregar_carro')->name('cliente.add');
Route::get('Cliente/carro', 'App\Http\Controllers\ProductoController@mostrar_carro')->name('cliente.carro');
Route::get('Cliente/del-cart/{id}', 'App\Http\Controllers\ProductoController@eliminar')->name('cliente.del');
Route::get('Cliente/comprar', 'App\Http\Controllers\ProductoController@comprar')->name('cliente.comprar');

//Route::resource('/Cliente/Producto','App\Http\Controllers\ProductoController');

//Rutas Login
Route::view('/login', "login")->name('login');
Route::get('/registro', function(){
    return view('Login.registro');
})->name('registro');

Route::post('/validar-registro', [LoginController::class, 'registro'])->name('validar-registro');
Route::post('/iniciar-sesion', [LoginController::class, 'login'])->name('iniciar-sesion');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

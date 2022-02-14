<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

// use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');


// ****************************************** PUBLIC **************************************************

Route::get('/home', 'HomeController@index')->name('home');


// ****************************************** ADMIN **************************************************

// ****************************************** CLIENTE **************************************************
Route::get('/clientes', 'ClienteController@index')->name('clientes');

Route::get('/cliente/nuevo', 'ClienteController@create')->name('cliente.form');
Route::post('/cliente/nuevo', 'ClienteController@store')->name('cliente.form');

// ****************************************** PRODUCTO **************************************************
Route::get('/productos', 'ProductoController@index')->name('productos');

Route::get('/producto/nuevo', 'ProductoController@create')->name('producto.form');
Route::post('/producto/nuevo', 'ProductoController@store')->name('producto.form');



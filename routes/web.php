<?php

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


Route::group(['middleware' => 'auth'], function() {

	Route::get('/home', 'HomeController@index')->name('home');	

	Route::get('/productos', 'ProductoController@listar');

	Route::get('/producto/{id}', 'ProductoController@listarId');

	Route::get('/productos/agregar', 'ProductoController@agregar');

	Route::post('productos/store', 'ProductoController@store');

	Route::get('/productos/eliminar/{id}', 'ProductoController@eliminar');

	Route::get('/perfil', 'UserController@perfil');

	Route::post('/editarPerfil', 'UserController@editarPerfil');

});

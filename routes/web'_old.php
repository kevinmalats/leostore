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
use Illuminate\Routing\Contracts;
use Illuminate\Routing\Exceptions\HttpException;


Route::get('/', function () {
    return view('res/login');
});

Route::get('inicio','inicioController@index')->name('inicio');

Route::post('login','Auth\LoginController@login')->name('login');
Route::post('logout','Auth\LoginController@logout')->name('logout');
Route::get('dashboard','dashcontroller@index')->name('dashboard');

//Route::get('productosshow1','productosController@show')->name('productosshow');
Route::post('productosstore','productosController@store')->name('productosstore');
Route::post('usuariostore','usuariosController@store')->name('usuariostore');
Route::post('productoimage','productoController@UploadImage')->name('productoimage');

/*Route::get('usuariostore','usuariosController@store')->name('usuariostore');*/


Route::group(['prefix'=>'System'],function(){
    Route::get('inicio','inicioController@index')->name('inicio');
    Route::get('listaproducto','productoController@index')->name('listaproducto');
    Route::get('usuario','usuarioController@index')->name('usuario');
    Route::get('producto','productoController@create')->name('producto');
    Route::get('panelproducto','productoController@index')->name('panelproducto');
    Route::get('listaproducto','productoController@show')->name('listaproducto');

    Route::resource('usuarios','usuariosController');
    Route::resource('productos','productosController');


});







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

Route::get('dashboard','dashcontroller@index')->name('dashboard');
Route::resource('favoritos', 'FavoritosController');
Route::resource('usuario', 'usuarioController');
Route::resource('Categorias', 'CategoriaController');
Route::resource('Roles', 'RolController');
Route::resource('producto', 'productoController');

Route::get('logout','Auth\LoginController@logout')->name('logout');

Route::get('test','practicaControler@indexTest');


//Route::get('productosshow1','productosController@show')->name('productosshow');
//Route::post('productosstore','productosController@store')->name('productosstore');
//Route::post('usuariostore','usuariosController@store')->name('usuariostore');
//RUTAS DE LOS APIS

Route::get('api/v1/productos','practicaControler@getProductos');
Route::get('/api/login','Auth\loginController@login');
Route::get('/api/newuser','Auth\RegisterController@registerUserApi');
Route::get('api/v1/categorias','practicaControler@getCategorias');
Route::get('api/v1/Prodcategorias','practicaControler@getProductosCategoria');
Route::get('api/v1/favoritos','practicaControler@getProductosFavoritos');
Route::get('api/v1/createfavoritos','practicaControler@createProductosFavoritos');
Route::get('api/v1/deletetefavoritos','practicaControler@deleteFavoritos');
Route::get('api/v1/global','practicaControler@getGlobal');
Route::get('api/v1/ec','practicaControler@getEc');




//Route::post('productoimage','productoController@UploadImage')->name('productoimage');

/*Route::get('usuariostore','usuariosController@store')->name('usuariostore');*/


/*Route::group(['prefix'=>'System'],function(){
    Route::get('inicio','inicioController@index')->name('inicio');
    //Route::get('listaproducto','productoController@index')->name('listaproducto');
    Route::get('usuario','usuarioController@index')->name('usuario');
    //Route::get('producto','productoController@create')->name('producto');
   // Route::get('productoedit/{id}','productoController@edit')->name('productoedit');
   
    //Route::get('panelproducto','productoController@index')->name('panelproducto');
    //Route::get('listaproducto','productoController@show')->name('listaproducto');
    Route::get('catalogoproducto','productosController@ver')->name('catalogoproducto');
     Route::get('princi','productosController@princ')->name('princ');
     Route::post('productos/categoria','productosController@consultar');
    //Route::post('productoimage','productoController@UploadImage')->name('productoimage');
    Route::get('logout','Auth\LoginController@logout')->name('logout');
    Route::resource('Categorias', 'CategoriaController');
    Route::resource('favoritos', 'FavoritosController');
    Route::resource('usuario', 'usuarioController');
    Route::resource('producto', 'productoController');
    
    Route::resource('Roles', 'RolController');
    Route::get('eliminaproducto/{codigo}',[
        'uses'=>'productoController@destroy',
        'as' => 'eliminaproducto'
        ]);




    Route::resource('usuarios','usuariosController');
    Route::resource('productos','productosController');


});*/







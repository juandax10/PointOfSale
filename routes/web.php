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
    return view('Principal.index');
});

Route::get('/inventario',[
    'uses'=>'InventarioController@getInventario',
    'as'=>'inventario'
]);
Route::get('/pedidos',[
    'uses'=>'InventarioController@getPedidos',
    'as'=>'pedidos'
]);
Route::get('/venta',[
    'uses'=>'VentasController@getVenta',
    'as'=>'venta'
]);
Route::post('/save-product',[
    'uses'=>'InventarioController@postProducto',
    'as'=>'añadir'
]);
Route::post('/save-suple',[
    'uses'=>'InventarioController@postSuple',
    'as'=>'añadir-suple'
]);

Route::post('/edit', [
    'uses'=>'InventarioController@getEditProduct',
    'as'=> 'product.edit'
]);

Route::get('/catego', function () {
    return view('Inventario.catego');
})->name('catego');
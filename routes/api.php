<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Cliente
Route::resource('/v1/cliente', 'ClienteController');

//Endereço de Entrega
Route::resource('/v1/endereco-entrega', 'EnderecoEntregaController');

//Pedido
Route::resource('/v1/pedido', 'PedidoController');

//Item Pedido
Route::resource('/v1/item-pedido', 'ItemPedidoController');

//Pizza
Route::resource('/v1/pizza', 'PizzaController');

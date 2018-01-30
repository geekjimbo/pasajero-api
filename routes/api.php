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

Route::post('/listar_rutas', 			'API\PasajeroController@listar_rutas');
Route::post('/listar_pasajeros', 		'API\PasajeroController@listar_pasajeros');

Route::post('/crear_ruta', 			'API\PasajeroController@solicitar_viaje');
Route::post('/crear_pasajero', 		'API\PasajeroController@registrar_pasajero');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

<?php

use Illuminate\Http\Request;
use App\Departamento;
use App\Http\Resources\Departamento as DepartamentoResource;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('products', function () {
    return response(['Product 1', 'Product 2', 'Product 3'],200);
});
Route::get('Departamento', function () {
    return DepartamentoResource::collection(Departamento::all());
});
/////<Departamento>/////////////////

/////</Departamento>/////////////////

/**
 * api ciudad
 */


/**
 * api tipo de documento
 */

    
/**
 * api usuario
 */
Route::group(['middleware'=>'cors'],function(){
    Route::post('usuario', 'UsuarioController@store');
    Route::get('tipoDocumento','TipoDocumentoController@index');
    Route::get('ciudad', 'CiudadController@index');
    Route::get('ciudad/{id}', 'CiudadController@ciudades');
    Route::get('departamento', 'DepartamentoController@index');
    Route::get('departamento/{id}', 'DepartamentoController@show');
    Route::post('departamento', 'DepartamentoController@store');
    Route::put('departamento/{id}', 'DepartamentoController@update');
    Route::delete('departamento/{id}', 'DepartamentoController@delete');
    Route::post('login', 'APILoginController@login');
});


Route::middleware('jwt.auth')->get('users', function () {
    return auth('api')->user();
}); 
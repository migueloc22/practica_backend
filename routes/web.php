<?php


use App\Departamento;
use App\Http\Resources\Departamento as DepartamentoResource;
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
    return [1, 2, 3];
});
Route::get('foo', function () {
    return 'Hello World';
});

Route::get('Departamento', function () {
    return DepartamentoResource::collection(Departamento::all());
});

// Route::resource('api/','api');
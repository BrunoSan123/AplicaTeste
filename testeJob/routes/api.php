<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//===================================================//

//Route::get('/teste','Api\ContatoController@listar');
Route::namespace('api')->group(function(){
    Route::post('/formulario/cadastro','ContatoController@criar');
    Route::get('/formulario','ContatoController@listar');
    Route::get('/formulario/{id}','ContatoController@show');

});


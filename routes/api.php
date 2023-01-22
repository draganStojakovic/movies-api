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
// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
// header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('movies', 'MoviesController@index');
Route::get('movies/{id}', 'MoviesController@show');
Route::post('movies', 'MoviesController@store');
Route::put('movies/{id}', 'MoviesController@update');
Route::delete('movies/{id}', 'MoviesController@delete');

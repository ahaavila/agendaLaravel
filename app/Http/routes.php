<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'ContatoController@index');
Route::get('/contatos', 'ContatoController@index');
Route::post('/contato', 'ContatoController@store');
Route::delete('/contato/{contato}', 'ContatoController@destroy');

Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::auth();

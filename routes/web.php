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

Route::get('/', [
	'as' => 'nada',
	'uses' => 'HomeController@index'
]);

Route::get('inicio', [
	'as' => 'inicio',
	'uses' => 'HomeController@index'
]);


//pantalla usuario
//loggin
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', ['as' =>'login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);


 
// Registration routes...
Route::get('register', [
	'as' => 'register',
	'uses' => 'Auth\AuthController@getRegister'
]);

Route::post('register', [
	'as' => 'auth/register', 
	'uses' => 'Auth\AuthController@postRegister'
]);

// Clasificacion de etapa

Route::post('clasifica', [
	'as' => 'clasifica', 
	'uses' => 'PrimeroController@clasifica'
]);


Route::post('clasificaconf', [
	'as' => 'clasificaconf', 
	'uses' => 'PrimeroController@clasificaconf'
]);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

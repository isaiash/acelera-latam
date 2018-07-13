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

Route::get('/hello', [
	'as' => 'nada',
	'uses' => 'HomeController@aaa'
]);

Route::get('inicio', [
	'as' => 'inicio',
	'uses' => 'HomeController@index'
]);

Route::get('/dash', [
	'as' => 'nada',
	'uses' => 'DashController@index'
]);

Route::get('/prueba', [
	'as' => 'prueba',
	'uses' => 'HomeController@prueba'
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


Route::post('q1', [
	'as' => 'q1', 
	'uses' => 'SegundoController@q1'
]);

Route::post('q2', [
	'as' => 'q2', 
	'uses' => 'SegundoController@q2'
]);

Route::post('q3', [
	'as' => 'q3', 
	'uses' => 'SegundoController@q3'
]);

Route::post('q4', [
	'as' => 'q4', 
	'uses' => 'SegundoController@q4'
]);

Route::post('q5', [
	'as' => 'q5', 
	'uses' => 'SegundoController@q5'
]);


Route::get('continue', [
	'as' => 'continue', 
	'uses' => 'SegundoController@continue'
]);

/*Route::post('clasificaconf', [
	'as' => 'clasificaconf',
	'uses' => 'PrimeroController@clasificaconf'
]);*/

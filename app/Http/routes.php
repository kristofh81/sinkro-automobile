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





Route::resource('images', 'ImageController');

Route::resource('cars', 'CarController');

Route::resource('carmodels', 'CarmodelController');

Route::resource('fueltypes', 'FueltypeController');
Route::resource('colors', 'ColorController');

Route::resource('consumptionemissions', 'ConsumptionemissionController');
Route::resource('characteristics', 'CharacteristicController');
Route::resource('versions', 'VersionController');
Route::resource('marks', 'MarkController');

/*
Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/

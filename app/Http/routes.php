<?php



//Route::get('cars/images-admin/{car_id}', 'ImageController@show');
//Route::get('cars/images-admin/edit/{car_id}', 'ImageController@edit');
Route::get('cars/images/delete-all-images/{car_id}', 'ImageController@destroyall');
Route::get('cars/completion/{car_id}', 'CarController@completion');
Route::get('cars/reserved', 'CarController@reserved');

Route::get('ajax-select-model', 'CarController@ajaxCreate');


Route::resource('cars/images', 'ImageController');
Route::resource('cars', 'CarController');
Route::resource('carmodels', 'CarmodelController');
Route::resource('fueltypes', 'FueltypeController');
Route::resource('colors', 'ColorController');
Route::resource('consumptionemissions', 'ConsumptionemissionController');
Route::resource('characteristics', 'CharacteristicController');
Route::resource('versions', 'VersionController');
Route::resource('marks', 'MarkController');


Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');
Route::get('home', 'HomeController@langchooser');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('language', array(
	'as' => 'language-chooser',
	'uses' => 'LanguageController@chooser'
	));

Route::get('angular', function()
{
	return View::make('angular');
});

Route::get('foo', ['middleware' => 'manager', function()
	{
		return 'only be viewed by managers';
	}]
);


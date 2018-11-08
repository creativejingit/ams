<?php
Route::group(['module' => 'Admin', 'middleware' => ['web'], 'namespace' => 'App\Modules\Admin\Controllers'], function() 
{

	Route::get('/', 'AuthenticationController@index');
}); 	
Route::group(['module' => 'Frontend', 'middleware' => ['web'], 'namespace' => 'App\Modules\Frontend\Controllers'], function() 
{
	Route::get('/signin', 'IndexController@index');
    Route::get('signin', 'LoginController@index');
    Route::post('signin', 'LoginController@post');
	Route::get('signout', 'LoginController@logout');
    Route::get('register', 'RegisterController@showRegistrationForm');
    Route::post('register', 'RegisterController@register');

});


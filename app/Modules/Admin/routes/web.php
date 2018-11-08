<?php

Route::group(['module' => 'Admin', 'middleware' => ['web','guest'], 'namespace' => 'App\Modules\Admin\Controllers'], function() 
{

	Route::group(['prefix'=>'admin'],function(){
    	Route::get('signin', 'AuthenticationController@index');
    	Route::post('signin', 'AuthenticationController@post');
	    Route::get('signout', 'AuthenticationController@logout');
	});

});

Route::group(['module' => 'Admin', 'middleware' => ['web','admin.auth'], 'namespace' => 'App\Modules\Admin\Controllers','prefix'=>'admin'], function() 
	{
	Route::get('/', 'IndexController@index');

	Route::group(['prefix'=>'payment'],function(){
		Route::get("/","PaymentController@index");
		Route::get("add", 'PaymentController@add');
		Route::get("edit/{id?}", 'PaymentController@edit');
		Route::post("save/{id?}","PaymentController@save");
		Route::get("remove/{id}","PaymentController@remove");
	});

	Route::group(['prefix'=>'admin_user'],function(){
		Route::get("/","AdminController@index");
		Route::get("add", 'AdminController@add');
		Route::get("edit/{id?}", 'AdminController@edit');
		Route::post("save/{id?}","AdminController@save");
		Route::get("remove/{id}","AdminController@remove");
	});

	//Services
	Route::group(['prefix'=>'service'],function(){

		// Service Categories
		Route::group(['prefix'=>'category'],function(){
			Route::get("/","ServiceCategoryController@index");
			Route::get("add", 'ServiceCategoryController@add');
			Route::get("edit/{id?}", 'ServiceCategoryController@edit');
			Route::get("view/{id}", 'ServiceCategoryController@view');
			Route::post("save/{id?}","ServiceCategoryController@save");
			Route::get("remove/{id}","ServiceCategoryController@remove");
		});
	});

	// Admin Setting
    Route::get('settings', 'SettingController@index');
    Route::post('settings', 'SettingController@save');
	Route::post('upload/image', 'UploadController@image');
	Route::post('upload/file', 'UploadController@file');
});

<?php

Route::group(['module' => 'Administrator', 'middleware' => ['web','guest'], 'namespace' => 'App\Modules\Administrator\Controllers'], function() {
	// Company
    Route::resource('Administrator', 'AdministratorController');
    Route::get('admin/dashboard', 'AdministratorController@index');
    Route::get('admin/company-creation', 'CompanyCreationController@index');
    Route::get('admin/add-company-creation', 'CompanyCreationController@add');

    Route::get('admin/company-creation/edit/{id?}', 'CompanyCreationController@edit');
	Route::post('admin/company-creation/save/{id?}', 'CompanyCreationController@save');
	Route::get('admin/company-creation/delete/{id}','CompanyCreationController@remove');

	// Client
    Route::get('admin/client-creation', 'ClientController@index');
    Route::get('admin/add-client-creation', 'ClientController@add');

    Route::get('admin/client-creation/edit/{id?}', 'ClientController@edit');
	Route::post('admin/client-creation/save/{id?}', 'ClientController@save');
	Route::get('admin/client-creation/delete/{id}','ClientController@remove');

});

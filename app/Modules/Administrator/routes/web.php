<?php

//Route::group(['module' => 'Administrator', 'middleware' => ['web','guest'], 'namespace' => 'App\Modules\Administrator\Controllers'], function() {
	
Route::group(['module' => 'Administrator', 'middleware' => ['web','guest'], 'namespace' => 'App\Modules\Administrator\Controllers','prefix'=>'admin'], function() 
{	
	
	// Company
    Route::resource('Administrator', 'AdministratorController');
    Route::get('dashboard', 'AdministratorController@index');
    Route::get('company-creation', 'CompanyCreationController@index');
    Route::get('add-company-creation', 'CompanyCreationController@add');

    Route::get('company-creation/edit/{id?}', 'CompanyCreationController@edit');
	Route::post('company-creation/save/{id?}', 'CompanyCreationController@save');
	Route::get('company-creation/delete/{id}','CompanyCreationController@remove');

	// Client
    Route::get('client-creation', 'ClientController@index');
    Route::get('add-client-creation', 'ClientController@add');

    Route::get('client-creation/edit/{id?}', 'ClientController@edit');
	Route::post('client-creation/save/{id?}', 'ClientController@save');
	Route::get('client-creation/delete/{id}','ClientController@remove');


    // Vendor
    Route::get('vendor-creation', 'VendorController@index');
    Route::get('add-vendor-creation', 'VendorController@add');

    Route::get('vendor-creation/edit/{id?}', 'VendorController@edit');
    Route::post('vendor-creation/save/{id?}', 'VendorController@save');
    Route::get('vendor-creation/delete/{id}','VendorController@remove');


    // FOREIGN EXCHANGE RATE
    Route::get('foreign-exchange-rate', 'ForeignExchangeRateController@index');
    Route::get('add-foreign-exchange-rate', 'ForeignExchangeRateController@add');

    Route::get('foreign-exchange-rate/edit/{id?}', 'ForeignExchangeRateController@edit');
    Route::post('foreign-exchange-rate/save/{id?}', 'ForeignExchangeRateController@save');
    Route::get('foreign-exchange-rate/delete/{id}','ForeignExchangeRateController@remove');

    // USER
    Route::get('user', 'UserController@index');
    Route::get('add-user', 'UserController@add');

    Route::get('user/edit/{id?}', 'UserController@edit');
    Route::post('user/save/{id?}', 'UserController@save');
    Route::get('user/delete/{id}','UserController@remove');

	

	
	// QUOTATION 
	Route::group(['prefix'=>'quotation'],function()
	{
		Route::get('/','QuotationController@index');
		Route::get('add', 'QuotationController@add');
		Route::get('edit/{id?}', 'QuotationController@edit');
		Route::post('save/{id?}', 'QuotationController@save');
		Route::get('delete/{id}','QuotationController@remove');
		Route::get('quotationDetail/delete/{id}','QuotationController@removeQuotationDetail');	
	});
	
	
    
	
});

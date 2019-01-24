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


    // Vendor
    Route::get('admin/vendor-creation', 'VendorController@index');
    Route::get('admin/add-vendor-creation', 'VendorController@add');

    Route::get('admin/vendor-creation/edit/{id?}', 'VendorController@edit');
    Route::post('admin/vendor-creation/save/{id?}', 'VendorController@save');
    Route::get('admin/vendor-creation/delete/{id}','VendorController@remove');


    // FOREIGN EXCHANGE RATE
    Route::get('admin/foreign-exchange-rate', 'ForeignExchangeRateController@index');
    Route::get('admin/add-foreign-exchange-rate', 'ForeignExchangeRateController@add');

    Route::get('admin/foreign-exchange-rate/edit/{id?}', 'ForeignExchangeRateController@edit');
    Route::post('admin/foreign-exchange-rate/save/{id?}', 'ForeignExchangeRateController@save');
    Route::get('admin/foreign-exchange-rate/delete/{id}','ForeignExchangeRateController@remove');

    // USER
    Route::get('admin/user', 'UserController@index');
    Route::get('admin/add-user', 'UserController@add');

    Route::get('admin/user/edit/{id?}', 'UserController@edit');
    Route::post('admin/user/save/{id?}', 'UserController@save');
    Route::get('admin/user/delete/{id}','UserController@remove');

	
	
	
	
	
	
	
	
    // QUOTATION 
    Route::get('admin/quotation','QuotationController@index');
    Route::get('admin/quotation/add', 'QuotationController@add');

    Route::get('admin/quotation/edit/{id?}', 'QuotationController@edit');
    Route::post('admin/quotation/save/{id?}', 'QuotationController@save');
    Route::get('admin/quotation/delete/{id}','QuotationController@remove');
	Route::get('admin/quotationDetail/delete/{id}','QuotationController@removeQuotationDetail');
	
	
});

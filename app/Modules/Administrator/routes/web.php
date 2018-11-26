<?php

Route::group(['module' => 'Administrator', 'middleware' => ['web'], 'namespace' => 'App\Modules\Administrator\Controllers'], function() {

    Route::resource('Administrator', 'AdministratorController');

});

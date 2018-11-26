<?php

Route::group(['module' => 'Administrator', 'middleware' => ['api'], 'namespace' => 'App\Modules\Administrator\Controllers'], function() {

    Route::resource('Administrator', 'AdministratorController');

});

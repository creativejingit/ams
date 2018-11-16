<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// login
Route::get('/login', 'IndexController@index');
Route::post('/log-in', 'AuthController@login');

// Register
Route::get('/register', 'AuthController@viewRegister');
Route::post('/register', 'AuthController@register');

// Dashboard
Route::get('/dashboard', 'AuthController@viewDashboard');
// Logout
Route::get('/logout', 'AuthController@logout');










Route::get('super-administrator/', 'SuperAdministratorController@index');
Route::get("super-administrator/add", 'SuperAdministratorController@add');
Route::get('super-administrator/edit/{id?}', 'SuperAdministratorController@edit');
Route::post('super-administrator/save/{id?}', 'SuperAdministratorController@save');
Route::get("super-administrator/delete/{id}","SuperAdministratorController@remove");

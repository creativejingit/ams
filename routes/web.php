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
Route::get('/', 'AuthController@index');
Route::post('/authenticate', 'AuthController@authenticate');

// Register
Route::get('/register', 'AuthController@viewRegister');
Route::post('/register', 'AuthController@register');

// Profile
Route::get('/profile', 'AuthController@profile');
Route::post('profile/save/{id?}', 'AuthController@saveProfile');

// Dashboard
Route::get('/dashboard/{type?}', 'DashboardController@index');

// Logout
Route::get('/logout', 'AuthController@logout');

// Save theme
Route::post('/save-user-theme', 'AuthController@saveUserTheme');




























// Create Package
Route::get('package/', 'PackageController@index');
Route::get('package/add', 'PackageController@add');
Route::get('package/edit/{id?}', 'PackageController@edit');
Route::post('package/save/{id?}', 'PackageController@save');

Route::get('package/get-modules', 'PackageController@getModules');
Route::get('package/get-saved-modules', 'PackageController@getSavedModules');
Route::post('package/save-package-modules', 'PackageController@savePackageModules');

// Groups.
Route::get('groups/view-group', 'GroupController@viewGroup');
Route::get('groups/add-group', 'GroupController@add');
Route::get('groups/edit/{id?}', 'GroupController@edit');
Route::post('groups/save/{id?}', 'GroupController@save');
Route::get('groups/delete/{id}','GroupController@remove');
Route::get('groups/group-modules/{id?}','GroupController@groupsModule');
Route::post('groups/group-modules/{id?}','GroupController@groupsModule');

// Organizations.
Route::get('organization/view-organization', 'OrganizationController@viewOrganization');
Route::get('organization/add-organization', 'OrganizationController@add');
Route::get('organization/edit/{id?}', 'OrganizationController@edit');
Route::post('organization/save/{id?}', 'OrganizationController@save');
Route::get('organization/delete/{id}','OrganizationController@remove');

// Super Administrator.
Route::get('super-administrator/', 'SuperAdministratorController@index');
Route::get("super-administrator/add", 'SuperAdministratorController@add');
Route::get('super-administrator/edit/{id?}', 'SuperAdministratorController@edit');
Route::post('super-administrator/save/{id?}', 'SuperAdministratorController@save');
Route::get("super-administrator/delete/{id}","SuperAdministratorController@remove");

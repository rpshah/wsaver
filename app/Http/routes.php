<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@homePage');

//Route::auth();
Route::get('auth/login','Auth\AuthController@showLoginForm');
Route::post('login', 'Auth\AuthController@login');
Route::get('login', 'Auth\AuthController@showLoginForm');
Route::get('logout', 'Auth\AuthController@logout');

Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
Route::post('password/reset', 'Auth\PasswordController@reset');
Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');

Route::get('register', 'CustomRegistrationController@showRegistrationForm');
Route::post('register', 'CustomRegistrationController@register');

Route::get('areas', 'AreaController@index');
Route::get('area/create', 'AreaController@createPage');
Route::post('area/create', 'AreaController@create');
Route::get('area/update/{area}', 'AreaController@updatePage');
Route::patch('area/update/{area}', 'AreaController@update');
Route::delete('area/delete/{area}', 'AreaController@delete');

Route::get('criterias', 'CriteriaController@index');
Route::get('criteria/create', 'CriteriaController@createPage');
Route::post('criteria/create', 'CriteriaController@create');
Route::get('criteria/update/{criteria}', 'CriteriaController@updatePage');
Route::patch('criteria/update/{criteria}', 'CriteriaController@update');
Route::delete('criteria/delete/{criteria}', 'CriteriaController@delete');

Route::get('devices', 'DeviceController@index');
Route::get('device/create', 'DeviceController@createPage');
Route::post('device/create', 'DeviceController@create');
Route::get('device/update/{device}', 'DeviceController@updatePage');
Route::patch('device/update/{device}', 'DeviceController@update');
Route::delete('device/delete/{device}', 'DeviceController@delete');

Route::get('families', 'FamilyController@index');
Route::get('family/create', 'FamilyController@createPage');
Route::post('family/create', 'FamilyController@create');
Route::get('family/update/{family}', 'FamilyController@updatePage');
Route::patch('family/update/{family}', 'FamilyController@update');
Route::delete('family/delete/{family}', 'FamilyController@delete');

Route::get('usages/{user}', 'UsageController@index');
Route::get('usage/enrty/{device}', 'UsageController@entry');

Route::get('/home', 'HomeController@index');


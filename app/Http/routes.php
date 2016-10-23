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

Route::get('/', function () {
    return view('welcome');
});

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
Route::delete('area/delete/{area}', 'AuthController@delete');

Route::get('/home', 'HomeController@index');



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

Route::get('setTheme/{themeName}', function($themeName){
  Session::put('themeName', $themeName);
  return Redirect::to('/');
});

//Route::get('login', 'Auth\AuthController@showLoginForm');
//Route::post('login', 'Auth\AuthController@postLogin');
//Route::get('logout', 'Auth\AuthController@logout');

Route::get('user/register', 'Auth\AuthController@getRegister');
Route::post('user/postRegister', 'Auth\AuthController@postRegister');

Route::get('user/list', 'User\UserController@listall');
Route::get('user/create', 'User\UserController@create');
Route::post('user/store', 'User\UserController@store');

/** API Route */
Route::group(array('prefix' => 'api/v1'), function () {
  Route::resource('user', 'Api\UserController@index');
});

/** API End**/
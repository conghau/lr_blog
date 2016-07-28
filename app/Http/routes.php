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

Route::get('user/list', 'User\UserController@listall');
Route::get('user/create', 'User\UserController@create');
Route::post('user/store', 'User\UserController@store');

/** API Route */
Route::group(array('prefix' => 'api/v1'), function () {
  Route::resource('user', 'Api\UserController');
});

/** API End**/
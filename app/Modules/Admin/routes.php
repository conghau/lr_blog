<?php
/**
 * Created by PhpStorm.
 * User: hautruong
 * Date: 02/08/2016
 * Time: 11:31
 */
Route::group([
  'prefix' => 'admin',
  'middleware' => ['web'],
  'namespace' => 'App\Modules\Admin\Controllers'
], function () {
  Route::get('/login', 'AuthController@showFormLogin');
  Route::get('/dashboard', 'IndexController@dashboard');
  Route::get('/lock', function (){
    return view('Admin::lockscreen');
  });

  Route::get('/story', 'StoryController@index');
});
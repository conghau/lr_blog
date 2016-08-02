<?php
/**
 * Created by PhpStorm.
 * User: hautruong
 * Date: 02/08/2016
 * Time: 11:31
 */
Route::group(['prefix' => 'site', 'namespace' => 'App\Modules\site\Controllers'], function () {
  Route::get('/', function () {
    return view('site::test');
  });
});
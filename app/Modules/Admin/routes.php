<?php
/**
 * Created by PhpStorm.
 * User: hautruong
 * Date: 02/08/2016
 * Time: 11:31
 */
Route::group(['prefix' => 'admin', 'namespace' => 'App\Modules\Admin\Controllers'], function () {
  Route::get('/dashboard', 'IndexController@index');
});
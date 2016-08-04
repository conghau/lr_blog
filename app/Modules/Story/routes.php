<?php
/**
 * Created by PhpStorm.
 * User: hautruong
 * Date: 04/08/2016
 * Time: 10:58
 */
Route::group([
  'prefix' => 'today-is-gift',
  'middleware' => ['web'],
  'namespace' => 'App\Modules\Story\Controllers'
], function () {
  Route::get('/', 'IndexController@index');
  Route::post('/postSubscriber', 'IndexController@postSubscriber');
});
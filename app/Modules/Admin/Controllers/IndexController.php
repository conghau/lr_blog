<?php
/**
 * Created by PhpStorm.
 * User: hautruong
 * Date: 02/08/2016
 * Time: 14:09
 */
namespace App\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;

class IndexController extends Controller {
  function index() {
    return view('Admin::login');
  }
  function dashboard() {
    return view('Admin::dashboard');
  }
}

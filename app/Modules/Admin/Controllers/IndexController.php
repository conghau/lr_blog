<?php
/**
 * Created by PhpStorm.
 * User: hautruong
 * Date: 02/08/2016
 * Time: 14:09
 */
namespace App\Modules\Admin\Controllers;

use App\Http\Controllers\AdminController;

class IndexController extends AdminController {
  
  function dashboard() {
    return view('Admin::dashboard');
  }
  function unlock(){
    
  }
}

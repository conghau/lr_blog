<?php
/**
 * Created by PhpStorm.
 * User: hautruong
 * Date: 03/08/2016
 * Time: 09:09
 */

namespace App\Http\Controllers;


class AdminController extends Controller {
  function __construct() {
    //$this->middleware('auth.admin')->except('login');
  }
}
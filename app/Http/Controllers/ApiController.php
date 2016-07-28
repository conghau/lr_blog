<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth;

class ApiController extends Controller {
  public function __construct() {
    $this->middleware('auth.api');
  }
}
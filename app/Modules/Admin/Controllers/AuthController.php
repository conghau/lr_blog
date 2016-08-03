<?php
/**
 * Created by PhpStorm.
 * User: hautruong
 * Date: 03/08/2016
 * Time: 09:20
 */

namespace App\Modules\Admin\Controllers;


use App\Http\Controllers\AdminController;
use Request;

/**
 * Class AuthController
 *
 * @package App\Modules\Admin\Controllers
 */
class AuthController extends AdminController {
  /**
   * Show form admin login
   *
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */
  function showFormLogin() {
    return view('Admin::login');
  }

  /**
   * Handler request from login form
   *
   * @param \Request $request
   */
  function postLogin(Request $request) {
    return $this->login($request);
  }

  function login(Request $request) {
    $this->validateLogin($request);

//    // If the class is using the ThrottlesLogins trait, we can automatically throttle
//    // the login attempts for this application. We'll key this by the username and
//    // the IP address of the client making these requests into this application.
//    $throttles = $this->isUsingThrottlesLoginsTrait();
//
//    if ($throttles && $lockedOut = $this->hasTooManyLoginAttempts($request)) {
//      $this->fireLockoutEvent($request);
//
//      return $this->sendLockoutResponse($request);
//    }
//
//    $credentials = $this->getCredentials($request);
//
//    if (Auth::guard($this->getGuard())->attempt($credentials, $request->has('remember'))) {
//      return $this->handleUserWasAuthenticated($request, $throttles);
//    }
//    // If the login attempt was unsuccessful we will increment the number of attempts
//    // to login and redirect the user back to the login form. Of course, when this
//    // user surpasses their maximum number of attempts they will get locked out.
//    if ($throttles && ! $lockedOut) {
//      $this->incrementLoginAttempts($request);
//    }
//
//    return $this->sendFailedLoginResponse($request);
  }
  
  function validateLogin(Request $request) {
    
  }
}
<?php
namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminAuthenticate {
  /**
   * @param $request
   * @param \Closure $next
   * @param null $guard
   * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
   */
  public function handle($request, Closure $next, $guard = NULL) {
    if (Auth::check() && Auth::user()->isAdmin()) {
      return $next($request);
    }
    else {
      return redirect('admin/login/');
    }
  }
}
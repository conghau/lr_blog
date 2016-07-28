<?php
namespace App\Http\Middleware;

use App\User;
use Closure;

class ApiAuthenticate {
  /**
   * @param $request
   * @param \Closure $next
   * @param null $guard
   * @return mixed
   */
  public function handle($request, Closure $next, $guard = NULL) {
    $token = $request->api_token;
    if (empty($token)) {
      return response('Unauthorized.', 401);
    }
    $allow = (User::where('api_token', '=', $token)
        ->count() > 0) ? TRUE : FALSE;
    if(!$allow) {
      return response('Unauthorized.', 401);
    }
    return $next($request);
  }
}
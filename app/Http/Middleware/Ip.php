<?php

namespace App\Http\Middleware;

use Closure;

class Ip
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      $user = session('user');
      $mdp = session('mdp');
        if($user == null && $mdp == null){
          return redirect('/');
        }
        else{
          return $next($request);
        }
    }
}

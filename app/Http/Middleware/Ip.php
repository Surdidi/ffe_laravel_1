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
    public function handle($user,$mdp)
    {
        if($user == null && $mdp == null){
          redirect('/');
        }
    }
}

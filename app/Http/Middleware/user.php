<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class user
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
         if(!isset(Auth::user()->id_usuario)){
         return redirect()->to('/login');
         }

        return $next($request);
    }
}

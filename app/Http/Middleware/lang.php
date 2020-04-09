<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class lang
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

           if(session()->get('lang')){
             App::setLocale(session()->get('lang'));
           }
           else
           {
            session()->put('lang','en');
            App::setLocale(session()->get('lang'));
           }
            return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{

    /**
     * Handle an incoming request. User must be logged in to do admin check
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(\Auth::check()){
            if (\Auth::user()->admin == 1){
                return $next($request);
            }else{
                return redirect("/admin");
            }
        }
        return redirect('/admin/login');
    }
}
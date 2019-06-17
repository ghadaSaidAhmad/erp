<?php

namespace App\Http\Middleware;

use Closure;

class StockManager
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
//        return $next($request);
        /**
         * @todo set admin role
         */
        if(auth()->user()->is_admin >= 2){
            return $next($request);
        }
        return redirect('/401')->with('error','You have not admin access');
    }
}

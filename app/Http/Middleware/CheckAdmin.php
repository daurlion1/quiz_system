<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Session;

class CheckAdmin
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
        if(!Auth::user()->teacher){
            Session::flash('error','You do not have permission!');
            return redirect()->back();
        }
        return $next($request);
    }
}

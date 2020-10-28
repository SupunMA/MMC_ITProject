<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;

class manager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!auth::check()){
            return redirect()->route('login');
        }

        if(auth::user()->role==1){
            return redirect()->route('admin');
        }
        
        if(auth::user()->role==2){
            return $next($request);
        }

        if(auth::user()->role==3){
            return redirect()->route('hrm');
        }

        if(auth::user()->role==0){
            return redirect()->route('unknown');
        }

        if(auth::user()->role==4){
            return redirect()->route('accounting');
        }

        if(auth::user()->role==5){
            return redirect()->route('emp');
        }
    }
}

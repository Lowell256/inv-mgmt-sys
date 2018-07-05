<?php

namespace App\Http\Middleware;

use Closure;

class Root
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
        $user_type = $request->session()->get('user_type');
        if($user_type === null){
            return redirect()->route('login_page');
        }
        if($user_type != 0){
            return "hindi ka admin";
        }
        else{
            return $next($request);
        }
        
    }
}

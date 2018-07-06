<?php

namespace App\Http\Middleware;

use Closure;

class Logged
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
        else{
            return $next($request);
        }
    }
}

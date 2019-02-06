<?php

namespace App\Http\Middleware;

use Closure;

class MustBeAdmin
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
        $user = $request->user();
//        dd($user);
        if ($user->email == 'sadeghi.dev@outlook.com'){
            return $next($request);
        }
        else{
            abort('404','no way');
//            round('start');
        }
    }
}

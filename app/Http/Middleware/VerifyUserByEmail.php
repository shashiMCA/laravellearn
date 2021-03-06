<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class VerifyUserByEmail
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
       $user = \App\User::findOrFail(Auth::id());
	   if($user->status == 0) {
          Auth::logout();
		   return redirect('login')->with('message', 'You need to verify your account first, check your email.');
	   }
		return $next($request);
    }
}

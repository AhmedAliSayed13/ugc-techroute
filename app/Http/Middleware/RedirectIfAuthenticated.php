<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle($request, Closure $next, ...$guards)
    {

            if (Auth::check() && Auth::user()->is_active == 1 && Auth::user()->email_verified_at != null) {
                // Redirect based on user type
                if (Auth::user()->is_creator == 1) {
                    return redirect()->route('creator.dashboard');
                } elseif (Auth::user()->is_creator == 0) {
                    return redirect()->route('client.dashboard');
                }
            }


        return $next($request);
    }
}

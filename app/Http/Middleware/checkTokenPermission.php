<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkTokenPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // return $next($request);

        // Retrieve token from .env file
        $allowedToken = env('TOKEN_PERMISSION');

        // Retrieve token from URL query parameter
        $urlToken = $request->query('token');

        if ($urlToken !== $allowedToken) {
            return redirect()->route('login');
        }

        return $next($request);
    }
}

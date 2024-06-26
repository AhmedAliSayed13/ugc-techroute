<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserAccountActive
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
        if (Auth::check() == false) {
            toastr()->error(__('messages.error'), __('messages.user_not_login'));
            Auth::logout();
            return redirect()->route('user.login');

        } elseif (Auth::user()->is_active != 1) {
            toastr()->error(__('messages.error'), __('messages.account_not_active'));
            Auth::logout();
            return redirect()->route('user.login');
        } elseif (Auth::user()->email_verified_at == null) {
            toastr()->error(__('messages.error'), __('messages.email_not_verified'));
            Auth::logout();
            return redirect()->route('user.login');
        }

        return $next($request);
    }
}

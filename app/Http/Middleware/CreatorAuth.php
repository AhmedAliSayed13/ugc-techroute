<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreatorAuth
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
        if (!Auth::check()) {
            toastr()->error(__('messages.You_need_to_log_in_first'));
            return redirect()->route('user.login');
        }

        $user = Auth::user();

        if ($user->is_creator != 1) {
            toastr()->error(__('messages.You_must_be_a_creator_to_access_this_section'));
            return redirect()->route('user.login');
        }

        if ($user->is_active != 1) {
            toastr()->error(__('messages.Your_account_is_not_active'));
            return redirect()->route('user.login');
        }
        return $next($request);
    }
}

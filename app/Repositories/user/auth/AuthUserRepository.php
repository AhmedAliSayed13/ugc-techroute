<?php namespace App\Repositories\user\auth;

use Auth;

class AuthUserRepository implements AuthUserInterface
{
    public function ShowLogin()
    {

        return [];
    }
    public function login($request): bool
    {
        if (Auth::guard('web')->attempt($request->only('email', 'password'))) {
            return true;
        }

        return false;

    }
    public function logout($request): bool
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return true;

    }
}

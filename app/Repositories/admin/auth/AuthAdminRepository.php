<?php namespace App\Repositories\admin\auth;

use Auth;

class AuthAdminRepository implements AuthAdminInterface
{
    public function ShowLogin()
    {

        return [];
    }
    public function login($request): bool
    {
        if (Auth::guard('admin')->attempt($request->only('email', 'password'))) {
            return true;
        }
        return false;

    }
    public function logout($request): bool
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return true;

    }
}

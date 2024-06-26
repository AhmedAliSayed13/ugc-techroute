<?php namespace App\Repositories\user\auth;

use App\Models\User;
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
    public function verifyEmail($token): bool
    {
        $user = User::where('email_verified_token', $token)->first();
        if ($user) {
            $user->email_verified_at = date('Y-m-d H:i:s');
            $user->email_verified_token = null;
            $user->save();
            toastr()->success(__('messages.successfully'), __('messages.yourAccountVerified'));
            return true;
        } else {
            toastr()->error(__('messages.error'), __('messages.token_not_valid'));
            return false;
        }

    }
    public function verify(): array
    {
        return [];
    }
}

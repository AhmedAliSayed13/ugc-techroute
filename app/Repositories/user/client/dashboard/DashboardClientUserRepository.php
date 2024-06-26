<?php namespace App\Repositories\user\client\dashboard;

use App\Mail\VerifyUserEmail;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Str;
class DashboardClientUserRepository implements DashboardClientUserInterface
{
    public function dashboard(): array
    {
        $data = array(
        );
        return $data;
    }
    public function ShowRegister(): array
    {
        $data = array(
        );
        return $data;
    }
    public function register($request)
    {
        $token= Str::random(60);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'is_creator' => 0,
            'is_active' => 1,
            'password' => Hash::make($request->password),
            'email_verified_token' => $token,
        ]);

        Mail::to($user->email)->send(new VerifyUserEmail($token));
        // Auth::login($user);
        toastr()->success(__('messages.successfully'), __('messages.register_successfully_please_check_your_email_for_verification'));
        return $user;
    }
}

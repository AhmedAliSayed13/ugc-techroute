<?php namespace App\Repositories\user\client\dashboard;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;
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
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'is_creator' => 0,
            'is_active' => 1,
            'password' => Hash::make($request->password),
        ]);
        Auth::login($user);
        return $user;
    }
}

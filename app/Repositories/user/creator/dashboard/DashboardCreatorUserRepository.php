<?php namespace App\Repositories\user\creator\dashboard;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class DashboardCreatorUserRepository implements DashboardCreatorUserInterface
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
            'is_creator' => 1,
            'password' => Hash::make($request->password),

        ]);
        Auth::login($user);
        return $user;
    }
}

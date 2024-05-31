<?php namespace App\Repositories\user\client\profile;

use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Hash;

class ProfileClientUserRepository implements ProfileClientUserInterface
{

    public function showProfile(): array
    {
        $data = array(
        );
        return $data;
    }
    public function profile($request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        Auth::login($user);
        return $user;
    }
}

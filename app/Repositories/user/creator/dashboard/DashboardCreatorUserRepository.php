<?php namespace App\Repositories\user\creator\dashboard;

use App\Models\Country;
use App\Models\CreatorInfo;
use App\Models\User;
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
        $countries = Country::all();
        $data = array(
            'countries' => $countries,
        );
        return $data;
    }
    public function register($request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'is_creator' => 1,
            'is_active' => 0,
            'password' => Hash::make($request->password),
        ]);

        if ($user) {
            CreatorInfo::create([
                'user_id' => $user->id,
                'country_id' => $request->country_id,
                'birthdate' => $request->birthdate,
                'gender' => $request->gender
            ]);
            // toastr()->success(__('messages.register_successfully'), __('messages.successOperation'));
        }else{
            toastr()->error(__('messages.register_failed'), __('messages.failedOperation'));
        }

        return $user;
    }
    public function registerWelcome():array
    {


        $data=[];

        return $data;
    }
}

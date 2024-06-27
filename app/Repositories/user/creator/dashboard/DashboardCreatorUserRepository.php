<?php namespace App\Repositories\user\creator\dashboard;

use App\Models\Country;
use App\Models\CreatorInfo;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Str;
use Mail;
use App\Mail\SendReqisterFormCreator;
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
        DB::beginTransaction();
        try {
            $token= Str::random(60);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'is_creator' => 1,
            'is_active' => 0,
            'password' => Hash::make($request->password),
            'email_verified_token' => $token,
        ]);
            CreatorInfo::create([
                'user_id' => $user->id,
                'country_id' => $request->country_id,
                'birthdate' => $request->birthdate,
                'gender' => $request->gender,
            ]);
            Mail::to($user->email)->send(new SendReqisterFormCreator($token, $user->name));

            DB::commit();
            return $user;
        } catch (\Exception $e) {
            toastr()->error(__('messages.error'), $e->getMessage());
            return false;
        }
    }
    public function registerWelcome(): array
    {

        $data = [];

        return $data;
    }
}

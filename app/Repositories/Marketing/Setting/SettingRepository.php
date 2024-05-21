<?php namespace App\Repositories\Marketing\Setting;

use App\Models\User;
use App\Models\Media;
use App\Models\Customer;
use App\Models\Emirate;
use App\Models\Ad;
use App\Models\ContractType;
use App\Models\Contract;
use App\Models\MarketingServiceType;
use App\Models\Role;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Hash;

class SettingRepository implements SettingInterface
{

    public function index(): array
    {

        $Users=User::all()->count();
        // $Customers=Customer::all()->count();
        // $ContractTypes=ContractType::all()->count();
        // $Roles=Role::all()->count();
        // $MarketingServiceTypes=MarketingServiceType::all()->count();
        // $Contracts=Contract::all()->count();
        // $Emirate=Emirate::all()->count();
        // $Ads=Ad::all()->count();
        // $AdsToday=Ad::whereDate('date', Carbon::today()->toDateString())->get()->count();

        $data = array(
            "Users" => $Users,
            // "Customers" => $Customers,
            // "Roles" => $Roles,
            // "ContractTypes" => $ContractTypes,
            // "MarketingServiceTypes" => $MarketingServiceTypes,
            // "Contracts" => $Contracts,
            // "Emirate" => $Emirate,
            // "Ads" => $Ads,
            // "AdsToday" => $AdsToday,
        );
        return $data;

    }
    public function setting(): array
    {

        $data = array(

        );
        return $data;

    }
    public function settingSave($request): bool
    {
        try {

            $user=Auth::user();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();
            toastr()->success("Item Has Been Saved Successfully");

            return true;

        } catch (\Exception $th) {
            toastr()->error($th->getMessage());
            return false;
        }
    }
    public function changePassword(): array
    {

        $data = array(

        );
        return $data;

    }
    public function changePasswordSave($request): bool
    {
        try {

            $user=Auth::user();
            $user->password = Hash::make($request->input('password'));
            $user->save();
            toastr()->success("Item Has Been Saved Successfully");

            return true;

        } catch (\Exception $th) {
            toastr()->error($th->getMessage());
            return false;
        }
    }


}

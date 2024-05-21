<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
use App\Repositories\Marketing\Setting\SettingInterface;
use App\Http\Requests\Settings\SettingRequest;
use App\Http\Requests\Settings\changePasswordRequest;
class HomeController extends Controller
{
    protected $settingInterface;
    private $path="Setting.";

    public function __construct(SettingInterface  $settingInterface)
    {
        $this->settingInterface = $settingInterface;

        $this->middleware('auth');
    }
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = $this->settingInterface->index();
        return  view($this->path.'index',compact('data'));
        // return view($this->path.'index',compact('Users','Roles','Customers','Emirate','ContractTypes','MarketingServiceTypes','Contracts','Ads','AdsToday'));
    }
    public function setting()
    {
        $data = $this->settingInterface->setting();
        return  view($this->path.'setting',compact('data'));
    }
    public function settingSave(SettingRequest $request)
    {
        $data = $this->settingInterface->settingSave($request);
        return  back();
    }
    public function changePassword()
    {
        $data = $this->settingInterface->changePassword();
        return  view($this->path.'changePassword',compact('data'));
    }
    public function changePasswordSave(changePasswordRequest $request)
    {
        $data = $this->settingInterface->changePasswordSave($request);
        return  back();
    }
}

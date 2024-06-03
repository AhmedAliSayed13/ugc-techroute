<?php

namespace App\Http\Controllers\user\creator\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\user\auth\RegisterCreatorRequest;
use App\Repositories\user\creator\dashboard\DashboardCreatorUserInterface;

class DashboardCreatorUserController extends Controller
{
    protected $dashboardCreatorUserInterface;
    private $path = "user.creator.dashboard.";

    public function __construct(DashboardCreatorUserInterface $dashboardCreatorUserInterface)
    {
        $this->dashboardCreatorUserInterface = $dashboardCreatorUserInterface;
    }
    public function dashboard()
    {
        $data = $this->dashboardCreatorUserInterface->dashboard();
        return view($this->path . 'index', compact($data));
    }
    public function ShowRegister()
    {
        $data = $this->dashboardCreatorUserInterface->ShowRegister();
        return view($this->path . 'register', compact('data'));
    }
    public function register(RegisterCreatorRequest $request)
    {
        $data = $this->dashboardCreatorUserInterface->register($request);
        return redirect()->route('creator.register.welcome');
    }
    public function registerWelcome()
    {
        $data = $this->dashboardCreatorUserInterface->registerWelcome();
        return view($this->path . 'register_welcome', compact('data'));
    }

}

<?php

namespace App\Http\Controllers\user\creator\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\user\auth\RegisterCreatorRequest;
use App\Repositories\user\creator\dashboard\DashboardCreatorUserInterface;
use Illuminate\Http\Request;
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
        return view($this->path . 'index', compact('data'));
    }
    public function ShowRegister()
    {
        $data = $this->dashboardCreatorUserInterface->ShowRegister();
        return view($this->path . 'register', compact('data'));
    }
    public function register(RegisterCreatorRequest $request)
    {
        $data = $this->dashboardCreatorUserInterface->register($request);
        $url=route('creator.register.welcome') . '?email=' . urlencode($request->email);
        return redirect($url);
    }
    public function registerWelcome(Request $request)
    {
        $data = $this->dashboardCreatorUserInterface->registerWelcome();
        $email = $request->query('email');
        return view($this->path . 'register_welcome', compact('data','email'));
    }
    public function showWallet()
    {
        $data = $this->dashboardCreatorUserInterface->showWallet();
        // return $data;
        return view($this->path . 'wallet', compact('data'));
    }
    public function shippings()
    {
        $data = $this->dashboardCreatorUserInterface->shippings();
        // return $data;
        return view($this->path . 'shippings', compact('data'));
    }

}

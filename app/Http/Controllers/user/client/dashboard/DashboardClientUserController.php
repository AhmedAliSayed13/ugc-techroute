<?php

namespace App\Http\Controllers\user\client\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\user\auth\RegisterClientRequest;
use App\Repositories\user\client\dashboard\DashboardClientUserInterface;

class DashboardClientUserController extends Controller
{
    protected $dashboardClientUserInterface;
    private $path = "user.client.dashboard.";

    public function __construct(DashboardClientUserInterface $dashboardClientUserInterface)
    {
        $this->dashboardClientUserInterface = $dashboardClientUserInterface;
    }
    public function dashboard()
    {
        $data = $this->dashboardClientUserInterface->dashboard();
        return view($this->path . 'index', compact($data));

    }
    public function ShowRegister()
    {
        $data = $this->dashboardClientUserInterface->ShowRegister();
        return view($this->path . 'register', compact($data));
    }
    public function register(RegisterClientRequest $request)
    {
        $data = $this->dashboardClientUserInterface->register($request);
        // if ($data) {
        //     return redirect()->route('client.dashboard');
        // }
        return redirect()->route('user.login');

    }

}

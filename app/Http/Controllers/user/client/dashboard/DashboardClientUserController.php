<?php

namespace App\Http\Controllers\user\client\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\user\auth\LoginRequest;
use App\Repositories\user\client\dashboard\DashboardClientUserInterface;
use Illuminate\Http\Request;

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

}

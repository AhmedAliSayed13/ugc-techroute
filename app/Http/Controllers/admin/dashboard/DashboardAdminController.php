<?php

namespace App\Http\Controllers\admin\dashboard;

use App\Http\Controllers\Controller;

// use App\Http\Requests\admin\dashboard\LoginRequest;
use App\Repositories\admin\dashboard\DashboardAdminInterface;

class DashboardAdminController extends Controller
{
    protected $dashboardAdminInterface;
    private $path = "admin.dashboard.";

    public function __construct(DashboardAdminInterface $dashboardAdminInterface)
    {
        $this->dashboardAdminInterface = $dashboardAdminInterface;
    }
    public function ShowDashboard()
    {
        $data = $this->dashboardAdminInterface->ShowDashboard();
        return view($this->path . 'index', compact($data));
    }

}

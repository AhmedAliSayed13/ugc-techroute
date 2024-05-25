<?php

namespace App\Http\Controllers\user\creator\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\user\auth\LoginRequest;
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
        return view($this->path . 'index', compact($data));
        // return 'asd';
    }

}

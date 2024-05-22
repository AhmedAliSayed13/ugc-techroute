<?php

namespace App\Http\Controllers\admin\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\auth\LoginRequest;
use App\Repositories\admin\auth\AuthAdminInterface;
use Illuminate\Http\Request;
class AuthAdminController extends Controller
{
    protected $authAdminInterface;
    private $path = "admin.auth.";

    public function __construct(AuthAdminInterface $authAdminInterface)
    {
        $this->authAdminInterface = $authAdminInterface;
    }
    public function ShowLogin()
    {
        $data = $this->authAdminInterface->ShowLogin();
        return view($this->path . 'login', compact($data));
    }
    public function login(LoginRequest $request)
    {
        $data = $this->authAdminInterface->login($request);
        if ($data) {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('admin.login');
    }
    public function logout(Request $request)
    {
        $data = $this->authAdminInterface->logout($request);

        return redirect()->route('admin.login');
    }
}

<?php

namespace App\Http\Controllers\user\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\user\auth\LoginRequest;
use App\Repositories\user\auth\AuthUserInterface;
use Illuminate\Http\Request;
class AuthUserController extends Controller
{
    protected $authUserInterface;
    private $path = "user.auth.";

    public function __construct(AuthUserInterface $authUserInterface)
    {
        $this->authUserInterface = $authUserInterface;
    }
    public function ShowLogin()
    {
        $data = $this->authUserInterface->ShowLogin();
        return view($this->path . 'login', compact($data));
    }
    public function login(LoginRequest $request)
    {
        $data = $this->authUserInterface->login($request);
        if ($data) {
            return true;
            // return redirect()->route('user.dashboard');
        }
        toastr()->error(__('messages.login_failed'));
        return redirect()->route('login');

    }
    public function logout(Request $request)
    {
        $data = $this->authUserInterface->logout($request);

        return redirect()->route('user.login');
    }
}

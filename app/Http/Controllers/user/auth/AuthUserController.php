<?php

namespace App\Http\Controllers\user\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\user\auth\LoginRequest;
use App\Http\Requests\user\auth\RegisterFormCreatorRequest;
use App\Repositories\user\auth\AuthUserInterface;
use Auth;
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
            if (Auth::user('user')->is_creator == 1) {

                return redirect()->route('creator.dashboard');
            } else {

                return redirect()->route('client.dashboard');
            }

        }
        toastr()->error(__('messages.login_failed'));
        return redirect()->route('user.login');

    }

    public function logout(Request $request)
    {
        $data = $this->authUserInterface->logout($request);

        return redirect()->route('user.login');
    }
    public function verifyEmail($token)
    {
        $data = $this->authUserInterface->verifyEmail($token);
        return redirect()->route('user.login');

    }
    public function verify()
    {
        $data = $this->authUserInterface->verify();
        return view($this->path . 'verify', compact($data));
    }
    public function registerFormCreator($token)
    {
        $data = $this->authUserInterface->registerFormCreator($token);
        if ($data) {
            return view($this->path . 'register_form_creator', compact('data'));
        } else {

            return redirect()->route('user.login');
        }
    }
    public function registerFormCreatorSave(RegisterFormCreatorRequest $request, $token)
    {

        $data = $this->authUserInterface->registerFormCreatorSave($request, $token);
        if ($data) {

            return redirect()->route('user.register.complete');
            // return view($this->path . 'register_complete', compact('data'));
        } else {
            return back();
        }
    }
    public function registerComplete()
    {
        $data = $this->authUserInterface->registerComplete();
        return view($this->path . 'register_complete', compact('data'));
    }
}

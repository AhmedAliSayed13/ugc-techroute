<?php

namespace App\Http\Controllers\user\forgot_password;

use App\Http\Controllers\Controller;
use App\Http\Requests\user\forget_password\sendResetLinkRequest;
use App\Http\Requests\user\forget_password\resetPasswordRequest;
use App\Repositories\user\forgot_password\ForgotPasswordUserInterface;

class ForgotPasswordUserController extends Controller
{
    protected $forgotPasswordUserInterface;
    private $path = "user.forgot_password.";

    public function __construct(ForgotPasswordUserInterface $forgotPasswordUserInterface)
    {
        $this->forgotPasswordUserInterface = $forgotPasswordUserInterface;
    }
    public function showForgetPasswordForm()
    {
        $data = $this->forgotPasswordUserInterface->showForgetPasswordForm();
        return view($this->path . 'forgot_form', compact('data'));
    }
    public function submitForgetPasswordForm(sendResetLinkRequest $request)
    {
        $data = $this->forgotPasswordUserInterface->submitForgetPasswordForm($request);

        return view($this->path . 'confirm_send_rest_email', compact('data'));
    }
    public function showResetPasswordForm($token)
    {
        $data = $this->forgotPasswordUserInterface->showResetPasswordForm($token);

        if(isset($data['status']) && $data['status'] == true){
            return view($this->path . 'reset_password', compact('data'));
        }else{

            return redirect()->route('user.login');
        }
    }
    public function submitResetPasswordForm (resetPasswordRequest $request)
    {
        // return $request->all();
        $data = $this->forgotPasswordUserInterface->submitResetPasswordForm($request);

        return redirect()->route('user.login');
    }

}

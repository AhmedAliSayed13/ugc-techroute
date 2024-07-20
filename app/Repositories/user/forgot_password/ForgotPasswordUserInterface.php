<?php namespace App\Repositories\user\forgot_password;

interface ForgotPasswordUserInterface
{
    public function showForgetPasswordForm():array;
    public function submitForgetPasswordForm($request):array;
    public function showResetPasswordForm($request):array;
    public function submitResetPasswordForm($request):bool;
}

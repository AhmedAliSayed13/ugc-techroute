<?php namespace App\Repositories\user\auth;

use App\Helpers\DataResponse;

interface AuthUserInterface {
    public function ShowLogin();
    public function login($request):bool;
    public function logout($request):bool;
}

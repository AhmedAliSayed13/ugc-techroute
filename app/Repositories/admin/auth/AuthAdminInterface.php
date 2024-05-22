<?php namespace App\Repositories\admin\auth;

use App\Helpers\DataResponse;

interface AuthAdminInterface {
    public function ShowLogin();
    public function login($request):bool;
    public function logout($request):bool;
}

<?php namespace App\Repositories\user\client\dashboard;



interface DashboardClientUserInterface {
    public function dashboard():array;
    public function ShowRegister():array;
    public function register($request);

}

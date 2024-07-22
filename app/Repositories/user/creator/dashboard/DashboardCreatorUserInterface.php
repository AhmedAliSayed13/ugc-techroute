<?php namespace App\Repositories\user\creator\dashboard;

interface DashboardCreatorUserInterface
{
    public function dashboard(): array;
    public function ShowRegister(): array;
    public function register($request);
    public function registerWelcome(): array;
    public function showWallet(): array;

}

<?php namespace App\Repositories\user\auth;

interface AuthUserInterface
{
    public function ShowLogin();
    public function login($request): bool;
    public function logout($request): bool;
    public function verifyEmail($token): bool;
    public function verify(): array;
    public function registerFormCreator($token): array;
    public function registerFormCreatorSave($request,$token): array;
}

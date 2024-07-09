<?php namespace App\Repositories\user\client\chat;

interface ChatClientUserInterface
{
    public function index(): array;
    public function show($id): array;
}

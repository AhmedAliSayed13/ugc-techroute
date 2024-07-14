<?php namespace App\Repositories\user\creator\chat;

interface ChatCreatorUserInterface
{
    public function index(): array;
    public function show($id): array;
    public function store($request): bool;
}

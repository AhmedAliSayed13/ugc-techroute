<?php namespace App\Repositories\admin\transaction;

interface TransactionAdminInterface
{
    public function index(): array;
    public function edit($id): array;
    public function update(Request $request, $id): bool;
}

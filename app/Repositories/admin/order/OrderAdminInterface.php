<?php namespace App\Repositories\admin\order;

interface OrderAdminInterface
{
    public function index(): array;
    public function show($id);
    public function edit($id): array;
    public function update(Request $request, $id): bool;
    public function orderConfirm($id): bool;
}

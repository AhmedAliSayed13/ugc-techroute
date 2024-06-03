<?php namespace App\Repositories\admin\locationOption;

interface LocationOptionAdminInterface
{
    public function index(): array;
    public function create(): array;
    public function store(Request $request): bool;
    public function show($id);
    public function edit($id): array;
    public function update(Request $request, $id): bool;
    public function destroy($id): bool;
}

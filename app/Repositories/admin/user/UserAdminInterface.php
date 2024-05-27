<?php namespace App\Repositories\admin\user;

interface UserAdminInterface
{
    public function index(): array;
    public function creatorCreate(): array;
    public function show($key);
    public function creatorStore(Request $request): bool;
    public function edit($id): array;
    public function update(Request $request, $user): bool;
    public function destroy($id): bool;
}

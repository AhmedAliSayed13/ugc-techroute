<?php namespace App\Repositories\admin\user;

interface UserAdminInterface
{
    public function index(): array;
    public function creatorCreate(): array;
    public function show($key);
    public function creatorStore(Request $request): bool;
    public function clientStore(Request $request): bool;
    public function creatorEdit($id): array;
    public function creatorUpdate(Request $request, $id): bool;
    public function clientEdit($id): array;
    public function clientUpdate(Request $request, $id): bool;
    public function destroy($id): bool;
}

<?php namespace App\Repositories\admin\valueOption;

interface ValueOptionAdminInterface
{
    public function index($id): array;
    public function create($id): array;
    public function store(Request $request, $id): bool;
    public function show($id);
    public function edit($id): array;
    public function update(Request $request, $id): bool;
    public function destroy($id): bool;
}

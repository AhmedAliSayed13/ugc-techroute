<?php

namespace App\Http\Controllers\admin\role;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\role\StoreRequest;
use App\Http\Requests\admin\role\UpdateRequest;
use App\Models\Role;
use App\Repositories\admin\role\RoleAdminInterface;

class RoleAdminController extends Controller
{
    protected $roleAdminInterface;
    private $path = "admin.roles.";

    public function __construct(RoleAdminInterface $roleAdminInterface)
    {
        $this->roleAdminInterface = $roleAdminInterface;
    }
    public function index()
    {
        $data = $this->roleAdminInterface->index();
        return view($this->path . 'index', compact('data'));
    }
    public function create()
    {
        $data = $this->roleAdminInterface->create();
        return view($this->path . 'create', compact('data'));
    }
    public function store(StoreRequest $request)
    {

        $data = $this->roleAdminInterface->store($request);
        if ($data) {
            return redirect()->route('admin.roles.index');
        }
        return back();
    }
    public function edit($id)
    {
        $data = $this->roleAdminInterface->edit($id);
        return view($this->path . 'edit', compact('data'));
    }
    public function update(UpdateRequest $request, Role $role)
    {

        $data = $this->roleAdminInterface->update($request, $role);
        if ($data) {
            return redirect()->route('admin.roles.index');
        }
        return back();
    }
    public function destroy($id)
    {

        $data = $this->roleAdminInterface->destroy($id);
        if ($data) {
            return redirect()->route('admin.roles.index');
        }
        return back();
    }

}

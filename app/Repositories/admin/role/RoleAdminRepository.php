<?php namespace App\Repositories\admin\role;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;
use Auth;
class RoleAdminRepository implements RoleAdminInterface
{

    public function index(): array
    {
        $roles = \App\Models\Role::AcceptRequest(getFillableSort('Role'))
            ->filter()
            ->orderBy(request()->get('sort')??'id')
            ->paginate(request()->get('perpage'), ['*'], 'page');
        $data = array(
            "roles" => $roles,
        );
        return $data;
    }
    public function show($key)
    {
        $role = Role::where('key',$key)->first();
        $role->count += 1; // increment the quantity by 1
        $role->save();
        return $role->redirect;
    }
    public function create(): array
    {

        $permission = Permission::get();
        $data = array(
            'permission'=>$permission
        );
        // $data = (object) collect($data)->toArray();
        return $data;
    }
    public function store($request): bool
    {
        try {
            $role = Role::create(['name' => $request->input('name')]);
            $role->syncPermissions($request->input('permission'));

            toastr()->success('Item Has Been Saved Successfully');

            return true;

        } catch (\Exception $th) {
            toastr()->error($th->getMessage());
            return false;
        }
    }

    public function edit($id): array
    {
        $role = Role::find($id);
        $permission = Permission::get();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
            ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
            ->all();

        $data = array(
            "role" => $role,
            "permission" => $permission,
            "rolePermissions" => $rolePermissions,


        );
        return $data;
    }
    public function update($request,$role): bool
    {
        try {
            $role = Role::find($role->id);
            $role->name = $request->input('name');
            $role->save();

            $role->syncPermissions($request->input('permission'));




            toastr()->success('Item Has Been Updated Successfully');
            return true;
        } catch (\Exception $th) {
            toastr()->error($th->getMessage());
            return false;
        }
    }
    public function destroy($id): bool
    {
        try {
            $Role = Role::find($id);
            if ($Role) {
                $Role->delete();
                toastr()->success(__('messages.ItemHasBeenDeletedSuccessfully'));
            return true;
            } else {
                    toastr()->error(__('messages.ItemNotExists'));
                    return false;
                }

        } catch (\Exception $th) {
            toastr()->error($th->getMessage());
            return false;
        }
    }

}

<?php namespace App\Repositories\admin\user;

use App\Models\User;
use DB;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
class UserAdminRepository implements UserAdminInterface
{

    public function index(): array
    {
        $users = User::AcceptRequest(getFillableSort('User'))
            ->filter()
            ->orderBy(request()->get('sort') ?? 'id')
            ->paginate(request()->get('perpage'), ['*'], 'page');
        $data = array(
            "users" => $users,
        );
        return $data;
    }
    public function show($key)
    {
        $user = User::where('key', $key)->first();
        $user->count += 1; // increment the quantity by 1
        $user->save();
        return $user->redirect;
    }
    public function creatorCreate(): array
    {


        $data = array(

        );
        // $data = (object) collect($data)->toArray();
        return $data;
    }
    public function creatorStore($request): bool
    {
        try {
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'active' => $request->input('active'),
                'password' => Hash::make($request->input('password')),
                'is_creator' => 1,
            ]);
            toastr()->success('Item Has Been Saved Successfully');
            return true;

        } catch (\Exception $th) {
            toastr()->error($th->getMessage());
            return false;
        }
    }
    public function clientCreate(): array
    {


        $data = array(

        );
        // $data = (object) collect($data)->toArray();
        return $data;
    }
    public function clientStore($request): bool
    {
        try {
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'active' => $request->input('active'),
                'password' => Hash::make($request->input('password')),
                'is_creator' => 0,
            ]);
            toastr()->success('Item Has Been Saved Successfully');
            return true;

        } catch (\Exception $th) {
            toastr()->error($th->getMessage());
            return false;
        }
    }

    public function edit($id): array
    {
        $user = User::find($id);
        $permission = Permission::get();
        $userPermissions = DB::table("user_has_permissions")->where("user_has_permissions.user_id", $id)
            ->pluck('user_has_permissions.permission_id', 'user_has_permissions.permission_id')
            ->all();

        $data = array(
            "user" => $user,
            "permission" => $permission,
            "userPermissions" => $userPermissions,

        );
        return $data;
    }
    public function update($request, $user): bool
    {
        try {
            $user = User::find($user->id);
            $user->name = $request->input('name');
            $user->save();

            $user->syncPermissions($request->input('permission'));

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

            DB::table("users")->where('id', $id)->delete();

            toastr()->success('Item Has Been Deleted Successfully');
            return true;

        } catch (\Exception $th) {
            toastr()->error($th->getMessage());
            return false;
        }
    }

}

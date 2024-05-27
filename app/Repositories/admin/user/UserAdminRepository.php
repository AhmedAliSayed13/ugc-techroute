<?php namespace App\Repositories\admin\user;

use App\Models\User;
use DB;
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

    public function creatorEdit($id): array
    {
        $user = User::find($id);

        $data = array(
            "user" => $user,

        );
        return $data;
    }
    public function creatorUpdate($request, $id): bool
    {
        try {

            $user = User::find($id);
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->phone = $request->input('phone');
            $user->is_active = $request->has('is_active') ? 1 : 0;
            $user->save();
            toastr()->success('Item Has Been Updated Successfully');
            return true;
        } catch (\Exception $th) {
            toastr()->error($th->getMessage());
            return false;
        }
    }
    public function clientEdit($id): array
    {
        $user = User::find($id);

        $data = array(
            "user" => $user,

        );
        return $data;
    }
    public function clientUpdate($request, $id): bool
    {
        try {

            $user = User::find($id);
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->phone = $request->input('phone');
            $user->is_active = $request->has('is_active') ? 1 : 0;
            $user->save();
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

<?php

namespace App\Http\Controllers\admin\user;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\user\StoreCreatorRequest;
use App\Http\Requests\admin\user\UpdateRequest;
use App\Models\User;
use App\Repositories\admin\user\UserAdminInterface;

class UserAdminController extends Controller
{
    protected $userAdminInterface;
    private $path = "admin.users.";

    public function __construct(UserAdminInterface $userAdminInterface)
    {
        $this->userAdminInterface = $userAdminInterface;
    }
    public function index()
    {
        $data = $this->userAdminInterface->index();
        return view($this->path . 'index', compact('data'));
    }
    public function creatorCreate()
    {
        $data = $this->userAdminInterface->creatorCreate();
        return view($this->path . 'creator_create', compact('data'));
    }
    public function creatorStore(StoreCreatorRequest $request)
    {
        $data = $this->userAdminInterface->creatorStore($request);
        if ($data) {
            return redirect()->route('admin.users.index');
        }
        return back();
    }
    public function edit($id)
    {
        $data = $this->userAdminInterface->edit($id);
        return view($this->path . 'edit', compact('data'));
    }
    public function update(UpdateRequest $request, User $user)
    {

        $data = $this->userAdminInterface->update($request, $user);
        if ($data) {
            return redirect()->route('admin.users.index');
        }
        return back();
    }
    public function destroy($id)
    {

        $data = $this->userAdminInterface->destroy($id);
        if ($data) {
            return redirect()->route('admin.users.index');
        }
        return back();
    }

}

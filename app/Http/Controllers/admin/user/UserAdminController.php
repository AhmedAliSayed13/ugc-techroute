<?php

namespace App\Http\Controllers\admin\user;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\user\StoreClientRequest;
use App\Http\Requests\admin\user\StoreCreatorRequest;
use App\Http\Requests\admin\user\UpdateClientRequest;
use App\Http\Requests\admin\user\UpdateCreatorRequest;
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
    public function clientCreate()
    {
        $data = $this->userAdminInterface->clientCreate();
        return view($this->path . 'client_create', compact('data'));
    }
    public function clientStore(StoreClientRequest $request)
    {
        $data = $this->userAdminInterface->clientStore($request);
        if ($data) {
            return redirect()->route('admin.users.index');
        }
        return back();
    }
    public function creatorEdit($id)
    {
        $data = $this->userAdminInterface->creatorEdit($id);
        return view($this->path . 'creator_edit', compact('data'));
    }
    public function creatorUpdate(UpdateCreatorRequest $request, $id)
    {

        $data = $this->userAdminInterface->creatorUpdate($request, $id);

        return back();
    }
    public function clientEdit($id)
    {
        $data = $this->userAdminInterface->clientEdit($id);
        return view($this->path . 'client_edit', compact('data'));
    }
    public function clientUpdate(UpdateClientRequest $request, $id)
    {

        $data = $this->userAdminInterface->clientUpdate($request, $id);

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

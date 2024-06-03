<?php

namespace App\Http\Controllers\admin\locationOption;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\locationOption\StoreRequest;
use App\Http\Requests\admin\locationOption\UpdateRequest;
use App\Models\LocationOption;
use App\Repositories\admin\locationOption\LocationOptionAdminInterface;

class LocationOptionAdminController extends Controller
{
    protected $locationOptionAdminInterface;
    private $path = "admin.locationOptions.";

    public function __construct(LocationOptionAdminInterface $locationOptionAdminInterface)
    {
        $this->locationOptionAdminInterface = $locationOptionAdminInterface;
    }
    public function index()
    {
        $data = $this->locationOptionAdminInterface->index();
        return view($this->path . 'index', compact('data'));
    }
    public function create()
    {
        $data = $this->locationOptionAdminInterface->create();
        return view($this->path . 'create', compact('data'));
    }
    public function store(StoreRequest $request)
    {
        $data = $this->locationOptionAdminInterface->store($request);
        if ($data) {
            return redirect()->route('admin.location-options.index');
        }
        return back();
    }

    public function edit($id)
    {
        $data = $this->locationOptionAdminInterface->edit($id);
        return view($this->path . 'edit', compact('data'));
    }
    public function update(UpdateRequest $request,$id)
    {
        // dd($locationOption);
        $data = $this->locationOptionAdminInterface->update($request,$id);

        return back();
    }
    public function destroy($id)
    {

        $data = $this->locationOptionAdminInterface->destroy($id);
        if ($data) {
            return redirect()->route('admin.location-options.index');
        }
        return back();
    }

}

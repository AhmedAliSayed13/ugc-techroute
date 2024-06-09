<?php

namespace App\Http\Controllers\admin\mainOption;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\mainOption\StoreRequest;
use App\Http\Requests\admin\mainOption\UpdateRequest;
use App\Models\MainOption;
use App\Repositories\admin\mainOption\MainOptionAdminInterface;

class MainOptionAdminController extends Controller
{
    protected $mainOptionAdminInterface;
    private $path = "admin.mainOptions.";

    public function __construct(MainOptionAdminInterface $mainOptionAdminInterface)
    {
        $this->mainOptionAdminInterface = $mainOptionAdminInterface;
    }
    public function index()
    {
        $data = $this->mainOptionAdminInterface->index();
        return view($this->path . 'index', compact('data'));
    }
    public function create()
    {
        $data = $this->mainOptionAdminInterface->create();
        return view($this->path . 'create', compact('data'));
    }
    public function store(StoreRequest $request)
    {
        $data = $this->mainOptionAdminInterface->store($request);
        if ($data) {
            return redirect()->route('admin.main-options.index');
        }
        return back();
    }

    public function edit($id)
    {
        $data = $this->mainOptionAdminInterface->edit($id);
        return view($this->path . 'edit', compact('data'));
    }
    public function update(UpdateRequest $request, $id)
    {
        // dd($mainOption);
        $data = $this->mainOptionAdminInterface->update($request, $id);

        return back();
    }
    public function destroy($id)
    {

        $data = $this->mainOptionAdminInterface->destroy($id);
        if ($data) {
            return redirect()->route('admin.main-options.index');
        }
        return back();
    }

}

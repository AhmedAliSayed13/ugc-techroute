<?php

namespace App\Http\Controllers\admin\showOption;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\showOption\StoreRequest;
use App\Http\Requests\admin\showOption\UpdateRequest;
use App\Models\ShowOption;
use App\Repositories\admin\showOption\ShowOptionAdminInterface;

class ShowOptionAdminController extends Controller
{
    protected $showOptionAdminInterface;
    private $path = "admin.showOptions.";

    public function __construct(ShowOptionAdminInterface $showOptionAdminInterface)
    {
        $this->showOptionAdminInterface = $showOptionAdminInterface;
    }
    public function index()
    {
        $data = $this->showOptionAdminInterface->index();
        return view($this->path . 'index', compact('data'));
    }
    public function create()
    {
        $data = $this->showOptionAdminInterface->create();
        return view($this->path . 'create', compact('data'));
    }
    public function store(StoreRequest $request)
    {
        $data = $this->showOptionAdminInterface->store($request);
        if ($data) {
            return redirect()->route('admin.show-options.index');
        }
        return back();
    }

    public function edit($id)
    {
        $data = $this->showOptionAdminInterface->edit($id);
        return view($this->path . 'edit', compact('data'));
    }
    public function update(UpdateRequest $request,$id)
    {
        // dd($showOption);
        $data = $this->showOptionAdminInterface->update($request,$id);

        return back();
    }
    public function destroy($id)
    {

        $data = $this->showOptionAdminInterface->destroy($id);
        if ($data) {
            return redirect()->route('admin.show-options.index');
        }
        return back();
    }

}

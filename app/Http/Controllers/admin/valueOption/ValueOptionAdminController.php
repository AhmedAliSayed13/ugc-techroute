<?php

namespace App\Http\Controllers\admin\valueOption;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\valueOption\StoreRequest;
use App\Http\Requests\admin\valueOption\UpdateRequest;
use App\Models\ValueOption;
use App\Repositories\admin\valueOption\ValueOptionAdminInterface;

class ValueOptionAdminController extends Controller
{
    protected $valueOptionAdminInterface;
    private $path = "admin.valueOptions.";

    public function __construct(ValueOptionAdminInterface $valueOptionAdminInterface)
    {
        $this->valueOptionAdminInterface = $valueOptionAdminInterface;
    }
    public function index($id)
    {
        $data = $this->valueOptionAdminInterface->index($id);
        // return $data['main_option_id'];
        return view($this->path . 'index', compact('data'));
    }
    public function show($id)
    {
        $data = $this->valueOptionAdminInterface->show($id);
        // return $data;
        return view($this->path . 'index', compact('data'));
    }
    public function create($id)
    {
        $data = $this->valueOptionAdminInterface->create($id);
        // return $data;
        return view($this->path . 'create', compact('data'));
    }
    public function store(StoreRequest $request, $id)
    {

        $data = $this->valueOptionAdminInterface->store($request, $id);
        // return $data;
        if ($data) {
            return redirect()->route('admin.value-options.index', $id);
        }
        return back();
    }

    public function edit($id)
    {
        $data = $this->valueOptionAdminInterface->edit($id);
        return view($this->path . 'edit', compact('data'));
    }
    public function update(UpdateRequest $request, $id)
    {
        // dd($valueOption);
        $data = $this->valueOptionAdminInterface->update($request, $id);

        return back();
    }
    public function destroy($id)
    {
        $main_option_id = ValueOption::find($id)->main_option_id;
        $data = $this->valueOptionAdminInterface->destroy($id);
        if ($data) {
            return redirect()->route('admin.value-options.index',$main_option_id);
        }
        return back();
    }

}

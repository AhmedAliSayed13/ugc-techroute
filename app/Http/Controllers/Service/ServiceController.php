<?php

namespace App\Http\Controllers\Service;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Service\ServiceInterface;
use App\Models\Service;
use App\Http\Requests\services\StoreRequest;
use App\Http\Requests\services\UpdateRequest;

class ServiceController extends Controller
{
    protected $serviceInterface;
    private $path="Service.";

    public function __construct(ServiceInterface  $serviceInterface)
    {
        $this->serviceInterface = $serviceInterface;

        // $this->middleware('permission:service-list|service-create|service-edit|service-delete', ['only' => ['index']]);
        // $this->middleware('permission:service-create', ['only' => ['create','store']]);
        // $this->middleware('permission:service-edit', ['only' => ['edit','update']]);
        // $this->middleware('permission:service-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $data = $this->serviceInterface->index();
        return  view($this->path.'index',compact('data'));
    }

    public function create()
    {
        $data = $this->serviceInterface->create();
        return  view($this->path.'create',compact('data'));
    }
    public function edit($id)
    {
        $data = $this->serviceInterface->edit($id);
        return  view($this->path.'edit',compact('data'));
    }
    public function store(StoreRequest $request)
    {
        $result = $this->serviceInterface->store($request);
        return  back();
    }

    public function update(UpdateRequest $request,$id)
    {
        $result = $this->serviceInterface->update($request,$id);
        return  back();
    }
    public function show($key)
    {
        $result = $this->serviceInterface->show($key);
        return redirect($result);
    }
    public function destroy($id)
    {
        $result = $this->serviceInterface->destroy($id);
        return  back();
    }



}


<?php

namespace App\Http\Controllers\Options;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Options\Visitor\VisitorInterface;
use App\Models\Visitor;
use App\Http\Requests\Options\Visitor\StoreVisitorRequest;
use App\Http\Requests\Options\Visitor\UpdateVisitorRequest;

class VisitorController extends Controller
{
    protected $visitorInterface;
    private $path="Options.Visitor.";

    public function __construct(VisitorInterface  $visitorInterface)
    {
        $this->visitorInterface = $visitorInterface;

        // $this->middleware('permission:visitor-list|visitor-create|visitor-edit|visitor-delete', ['only' => ['index']]);
        // $this->middleware('permission:visitor-create', ['only' => ['create','store']]);
        // $this->middleware('permission:visitor-edit', ['only' => ['edit','update']]);
        // $this->middleware('permission:visitor-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $data = $this->visitorInterface->index();
        return  view($this->path.'index',compact('data'));
    }

    public function create()
    {
        $data = $this->visitorInterface->create();
        return  view($this->path.'create',compact('data'));
    }
    public function edit($id)
    {
        $data = $this->visitorInterface->edit($id);
        return  view($this->path.'edit',compact('data'));
    }
    public function store(StoreVisitorRequest $request)
    {
        $result = $this->visitorInterface->store($request);
        return  back();
    }
    
    public function update(UpdateVisitorRequest $request,$id)
    {
        $result = $this->visitorInterface->update($request,$id);
        return  back();
    }
    public function show($key)
    {
        $result = $this->visitorInterface->show($key);
        return redirect($result); 
    }
    public function destroy($id)
    {
        $result = $this->visitorInterface->destroy($id);
        return  back();
    }
    
    
    
}


<?php

namespace App\Http\Controllers\Marketing;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Marketing\Ad\AdInterface;
use App\Models\Ad;
use App\Http\Requests\Marketing\Ad\StoreAdRequest;
use App\Http\Requests\Marketing\Ad\UpdateAdRequest;

class AdController extends Controller
{
    protected $adInterface;
    private $path="Marketing.Ad.";

    public function __construct(AdInterface  $adInterface)
    {
        $this->adInterface = $adInterface;

        $this->middleware('permission:ad-list|ad-create|ad-edit|ad-delete', ['only' => ['index','show']]);
        $this->middleware('permission:ad-create', ['only' => ['create','store']]);
        $this->middleware('permission:ad-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:ad-delete', ['only' => ['destroy']]);
    }

    
    public function index()
    {
        $data = $this->adInterface->index();
        return  view($this->path.'index',compact('data'));
    }

    public function create()
    {
        
        $data = $this->adInterface->create();
        return  view($this->path.'create',compact('data'));
    }
    public function edit($id)
    {
        $data = $this->adInterface->edit($id);
        return  view($this->path.'edit',compact('data'));
    }
    public function store(StoreAdRequest $request)
    {
        $result = $this->adInterface->store($request);
        return  back();
        // return  $request;
    }
    
    public function update(UpdateAdRequest $request,$id)
    {
        // return 'ok';
        $result = $this->adInterface->update($request,$id);
        return  back();
    }
    public function show($id)
    {
        
        $result = $this->adInterface->show($id);
        return  $result->json();
    }
    public function destroy($id)
    {
        
        $result = $this->adInterface->destroy($id);
        
        return  back();
    }
    
    
    
}


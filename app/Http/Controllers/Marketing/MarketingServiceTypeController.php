<?php

namespace App\Http\Controllers\Marketing;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Marketing\ServiceType\MarketingServiceTypeInterface;
use App\Models\MarketingServiceType;
use App\Http\Requests\Marketing\ServiceType\StoreMarketingServiceTypeRequest;
use App\Http\Requests\Marketing\ServiceType\UpdateMarketingServiceTypeRequest;

class MarketingServiceTypeController extends Controller
{
    protected $marketingServiceTypeInterface;
    private $path="Marketing.ServiceType.";

    public function __construct(MarketingServiceTypeInterface  $marketingServiceTypeInterface)
    {
        $this->marketingServiceTypeInterface = $marketingServiceTypeInterface;
        $this->middleware('permission:ad-type-list|ad-type-create|ad-type-edit|ad-type-delete', ['only' => ['index','show']]);
        $this->middleware('permission:ad-type-create', ['only' => ['create','store']]);
        $this->middleware('permission:ad-type-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:ad-type-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $data = $this->marketingServiceTypeInterface->index();
        return  view($this->path.'index',compact('data'));
    }

    public function create()
    {
        $data = $this->marketingServiceTypeInterface->create();
        return  view($this->path.'create',compact('data'));
    }
    public function edit($id)
    {
        $data = $this->marketingServiceTypeInterface->edit($id);
        return  view($this->path.'edit',compact('data'));
    }
    public function store(StoreMarketingServiceTypeRequest $request)
    {
        $result = $this->marketingServiceTypeInterface->store($request);
        return  back();
    }
    public function update(UpdateMarketingServiceTypeRequest $request,MarketingServiceType $marketingServiceType)
    {
        
        $result = $this->marketingServiceTypeInterface->update($request,$marketingServiceType);
        return  back();
    }
    public function show($id)
    {
        
        $result = $this->marketingServiceTypeInterface->show($id);
        return  $result->json();
    }
    public function destroy($id)
    {
        
        $result = $this->marketingServiceTypeInterface->destroy($id);
        
        return  back();
    }
}


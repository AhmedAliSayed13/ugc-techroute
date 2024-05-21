<?php

namespace App\Http\Controllers\Marketing;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Marketing\ContractType\ContractTypeInterface;
use App\Models\ContractType;
use App\Http\Requests\Marketing\ContractType\StoreContractTypeRequest;
use App\Http\Requests\Marketing\ContractType\UpdateContractTypeRequest;

class ContractTypeController extends Controller
{
    protected $contractTypeInterface;
    private $path="Marketing.ContractType.";

    public function __construct(ContractTypeInterface  $contractTypeInterface)
    {
        $this->contractTypeInterface = $contractTypeInterface;

        $this->middleware('permission:contract-type-list|contract-type-create|contract-type-edit|contract-type-delete', ['only' => ['index','show']]);
        $this->middleware('permission:contract-type-create', ['only' => ['create','store']]);
        $this->middleware('permission:contract-type-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:contract-type-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $data = $this->contractTypeInterface->index();
        return  view($this->path.'index',compact('data'));
    }

    public function create()
    {
        $data = $this->contractTypeInterface->create();
        return  view($this->path.'create',compact('data'));
    }
    public function edit($id)
    {
        $data = $this->contractTypeInterface->edit($id);
        return  view($this->path.'edit',compact('data'));
    }
    public function store(StoreContractTypeRequest $request)
    {
        $result = $this->contractTypeInterface->store($request);
        return  back();
    }
    
    public function update(UpdateContractTypeRequest $request,$id)
    {
        $result = $this->contractTypeInterface->update($request,$id);
        return  back();
    }
    public function show($id)
    {
        $result = $this->contractTypeInterface->show($id);
        return  $result->json();
    }
    public function destroy($id)
    {
        $result = $this->contractTypeInterface->destroy($id);
        return  back();
    }
    
    
    
}


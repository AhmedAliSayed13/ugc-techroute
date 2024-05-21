<?php

namespace App\Http\Controllers\Marketing;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Marketing\Contract\ContractInterface;
use App\Models\Contract;
use App\Http\Requests\Marketing\Contract\StoreContractRequest;
use App\Http\Requests\Marketing\Contract\UpdateContractRequest;

class ContractController extends Controller
{
    protected $contractTypeInterface;
    private $path="Marketing.Contract.";

    public function __construct(ContractInterface  $contractTypeInterface)
    {
        $this->contractTypeInterface = $contractTypeInterface;

        $this->middleware('permission:contract-list|contract-create|contract-edit|contract-delete', ['only' => ['index','show']]);
        $this->middleware('permission:contract-create', ['only' => ['create','store']]);
        $this->middleware('permission:contract-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:contract-delete', ['only' => ['destroy']]);
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
    public function store(StoreContractRequest $request)
    {
        $result = $this->contractTypeInterface->store($request);
        return  back();
    }
    
    public function update(UpdateContractRequest $request,$id)
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


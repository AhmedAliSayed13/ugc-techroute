<?php namespace App\Repositories\Marketing\ContractType;


use App\Models\ContractType;
use App\Models\Customer;
use App\Models\MarketingServiceType;
use App\Helpers\FileManager;
use Auth;
class ContractTypeRepository implements ContractTypeInterface
{

    
    public function index(): array
    {
        $contractTypes = ContractType::AcceptRequest(getFillableSort('ContractType'))
            ->filter()
            ->orderBy(request()->get('sort')??'id')
            ->paginate(request()->get('perpage'), ['*'], 'page');
        $data = array(
            "contractTypes" => $contractTypes,
        );
        return $data;
    }
    public function create(): array
    {
       
        $data = array(
            
        );
        return $data;
    }
    public function store($request): bool
    {
        try {
            
            
            $ad=ContractType::create([
                'name'=>$request->name,
               
            ]);
           
            toastr()->success('Item Has Been Saved Successfully');

            return true;

        } catch (\Exception $th) {
            toastr()->error($th->getMessage());
            return false;
        }
    }
    
    public function edit($id): array
    {
        $contractType = ContractType::find($id);
       
        $data = array(
            "contractType" => $contractType,
           
        );
        return $data;
    }
    public function update($request,$id): bool
    {
        try {
            $ad = ContractType::find($id);
            $ad->update([
                'name'=>$request->name,
               
            ]);
            
            toastr()->success('Item Has Been Updated Successfully');
            return true;
        } catch (\Exception $th) {
            toastr()->error($th->getMessage());
            return false;
        }
    }
    public function destroy($id): bool
    {
        try {
            $ContractType = ContractType::find($id);
            if ($ContractType) {
                $ContractType->delete();
                toastr()->success(__('messages.ItemHasBeenDeletedSuccessfully'));
            return true;
            } else {
                    toastr()->error(__('messages.ItemNotExists'));
                    return false;
                }
                    
        } catch (\Exception $th) {
            toastr()->error($th->getMessage());
            return false;
        }
    }

}

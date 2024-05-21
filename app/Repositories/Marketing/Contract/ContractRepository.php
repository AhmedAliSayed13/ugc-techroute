<?php namespace App\Repositories\Marketing\Contract;


use App\Models\Contract;
use App\Models\Customer;
use App\Models\ContractType;
use App\Models\MarketingServiceType;
use App\Models\Option;
use App\Helpers\FileManager;
use Auth;
class ContractRepository implements ContractInterface
{

    
    public function index(): array
    {
        $contracts = Contract::AcceptRequest(getFillableSort('Contract'))
            ->filter()
            ->orderBy(request()->get('sort')??'id')
            ->paginate(request()->get('perpage'), ['*'], 'page');
        $data = array(
            "contracts" => $contracts,
        );
        return $data;
    }
    public function create(): array
    {
       $contractTypes=ContractType::all();
       $customers=Customer::all();
       $services=MarketingServiceType::all();
        $data = array(
        'contractTypes'=>$contractTypes,
        'customers'=>$customers,
        'services'=>$services,
        );
        return $data;
    }
    public function store($request): bool
    {
        try {
            $contract=Contract::create([
                'name'=>$request->name,
                'phone'=>$request->phone,
                'price'=>$request->price,
                'payment_method'=>$request->payment_method,
                'date_first_payment'=>$request->date_first_payment,
                'date_second_payment'=>$request->date_second_payment,
                'date_third_payment'=>$request->date_third_payment,
                'reason_delayed_payment'=>$request->reason_delayed_payment,
                'new_payment_date'=>$request->new_payment_date,
                'payment_status'=>($request->payment_status=='on')?1:0,
                'contract_type_id'=>$request->contract_type_id,
                'customer_id'=>$request->customer_id,
            ]);
           foreach($request->services as $key=>$service){
            Option::create([
                'value'=>isset($request->values[$key])?$request->values[$key]:0,
                'marketing_service_type_id'=> $request->services[$key],
                'contract_id'=>$contract->id,
            ]);
           }
            toastr()->success('Item Has Been Saved Successfully');

            return true;

        } catch (\Exception $th) {
            toastr()->error($th->getMessage());
            return false;
        }
    }
    
    public function edit($id): array
    {
        $contract = Contract::find($id);
        $contractTypes=ContractType::all();
        $customers=Customer::all();
        $services=MarketingServiceType::all();
        $data = array(
            "contract" => $contract,
            'contractTypes'=>$contractTypes,
            'customers'=>$customers,
            'services'=>$services,
           
        );
        return $data;
    }
    public function update($request,$id): bool
    {
        try {
            $ad = Contract::find($id);
            $ad->update([
                'name'=>$request->name,
                'phone'=>$request->phone,
                'price'=>$request->price,
                'payment_method'=>$request->payment_method,
                'date_first_payment'=>$request->date_first_payment,
                'date_second_payment'=>$request->date_second_payment,
                'date_third_payment'=>$request->date_third_payment,
                'reason_delayed_payment'=>$request->reason_delayed_payment,
                'new_payment_date'=>$request->new_payment_date,
                'payment_status'=>($request->payment_status=='on')?1:0,
                'contract_type_id'=>$request->contract_type_id,
                'customer_id'=>$request->customer_id,
            ]);
            
            foreach($request->options as $key=>$option){
                $option=Option::find($option);
                $option->value=$request->values[$key];
                $option->save();
                
            }
            if($request->input('newValues')){
            foreach($request->input('newValues') as $key=>$option){
                Option::create([
                    'value'=>isset($request->newValues[$key])?$request->newValues[$key]:0,
                    'marketing_service_type_id'=> $request->newOptions[$key],
                    'contract_id'=>$id,
                ]);
            }
        }
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
            $Contract = Contract::find($id);
            if ($Contract) {
                $Contract->delete();
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

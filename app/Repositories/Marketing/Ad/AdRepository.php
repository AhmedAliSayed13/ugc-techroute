<?php namespace App\Repositories\Marketing\Ad;

use App\Helpers\FileManager;
use App\Models\Ad;
use App\Models\AdsFile;
use App\Models\Customer;
use App\Models\Category;
use App\Models\MarketingServiceType;
use App\Helpers\OdooSystem;
use Auth;

class AdRepository implements AdInterface
{

    private $path = 'ads-medias';
    public function index(): array
    {
        $ads = Ad::AcceptRequest(getFillableSort('Ad'))
            ->filter()
            ->orderBy(request()->get('sort') ?? 'id')
            ->paginate(request()->get('perpage'), ['*'], 'page');
        $data = array(
            "ads" => $ads,
        );
        return $data;
    }
    public function create()
    {
        $categories = Category::all();
        $odooSystem = new OdooSystem();
        $token=$odooSystem->token();
        $customers=$odooSystem->customers($token);
       
        
        $data = array(
            "customers" => $customers,
            "categories" => $categories,
           
        );
        return $data;
        
    }
    public function store($request)
    {
        try {

            $marketing_service_type_id = $request->marketing_service_type_id;
            $serviecs = session()->get('serviecs', []);
            $serviec = collect($serviecs)->firstWhere('id', $marketing_service_type_id);
            $product_id = isset($serviec->product_id)?$serviec->product_id:null;
            $checkContract = CheckContractOption($request->customer_id,$product_id,$request->marketing_service_type_id,$serviec->ordered_qty,$serviec->delivered_qty);
            
            if ($checkContract) {
                $ad = Ad::create([
                    'time' => $request->time,
                    'date' => $request->date,
                    'details' => $request->details,
                    'notes' => $request->notes,
                    'category_id' => $request->category_id,
                    'customer_id' => $request->customer_id,
                    'product_id' => $product_id,
                    'customer' => $request->customer,
                    'marketing_service_type_id' => $request->marketing_service_type_id,
                    'marketing_service_type' => $request->marketing_service_type,
                    'user_id' => Auth::user()->id,
                ]);
                if ($request->hasFile('medias')) {
                    $fileManager = new FileManager();
                    foreach ($request->file('medias') as $media) {
                        $fileName = $fileManager->uploadFile($media, $this->path);
                        AdsFile::create([
                            'url' => $fileName,
                            'ad_id' => $ad->id,
                        ]);
                    }
                }
                

                toastr()->success('Item Has Been Saved Successfully');
                return true;
            } else {
                toastr()->error("Based on the customer's contract, the customer has exceeded the maximum allowed number of ads of this type. Therefore, it is not possible to add any more ads");
                return false;
            }
            

        } catch (\Exception $th) {
            toastr()->error($th->getMessage());
            return false;
        }
    }

    public function edit($id): array
    {
        // $odooSystem = new OdooSystem();
        // $token=$odooSystem->token();
        // $customers=$odooSystem->customers($token);

        $ad = Ad::find($id);
        // $customers = Customer::all();
        $serviceTypes = MarketingServiceType::all();
        $data = array(
            "ad" => $ad,
            // "customers" => $customers,
            // "serviceTypes" => $serviceTypes,
        );
        return $data;
    }
    public function update($request, $id): bool
    {
        try {
            $ad = Ad::find($id);
            $currentStatus=$ad->publish;
            
            $ad->update([
                'time' => $request->time,
                'date' => $request->date,
                'details' => $request->details,
                'notes' => $request->notes,
                'publish' =>  1,
            ]);
            if ($request->hasFile('medias')) {
                $fileManager = new FileManager();
                foreach ($request->file('medias') as $media) {
                    $fileName = $fileManager->uploadFile($media, $this->path);
                    AdsFile::create([
                        'url' => $fileName,
                        'ad_id' => $ad->id,
                    ]);
                }
            }
            if($currentStatus==0){
                $odooSystem = new OdooSystem();
                $token=$odooSystem->token();
                $odooSystem->orderCreate($token,$ad->marketing_service_type_id);
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
            $Ad = Ad::find($id);
            if ($Ad) {
                $Ad->delete();
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

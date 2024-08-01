<?php namespace App\Repositories\user\creator\offers;

use App\Models\Order;
use App\Models\OrderRequest;
use App\Models\Whitelist;
use Illuminate\Support\Facades\Auth;
class OffersCreatorUserRepository implements OffersCreatorUserInterface
{

    public function index(): array
    {
        $offers = Order::where(['paid' => 1, 'status' => 5])->orderby('created_at', Request()->sort ?? 'desc')->paginate(Request()->limit ?? 10);
        $data = array(
            'offers' => $offers,
        );
        return $data;
    }
    public function show($id): array
    {
        $order = Order::find($id);
        $data = array(
            'order' => $order,
        );
        return $data;
    }
    public function requestSend($request, $id)
    {
        if(!isset(Auth::user()->creatorInfo->shipping_address) || Auth::user()->creatorInfo->shipping_address == null){
            toastr()->error(__('messages.error'), __('messages.you_have_not_added_shipping_address'));
            return false;
        }
        $order = OrderRequest::Create([
            'order_id' => $id,
            'creator_id' => auth()->user()->id,
        ]);
        toastr()->success(__('messages.Updated_successfully'), __('messages.successOperation'));
        return true;
    }
    public function whitelist( $id)
    {
        $order=Order::find($id);
        if($order->hasWhitelist()){

            whitelist::where(['order_id' => $id, 'creator_id' => auth()->user()->id])->delete();

        }else{

            $order = Whitelist::Create([
                'order_id' => $id,
                'creator_id' => auth()->user()->id,
            ]);
        }
        // toastr()->success(__('messages.Updated_successfully'), __('messages.successOperation'));
        return true;
    }

}

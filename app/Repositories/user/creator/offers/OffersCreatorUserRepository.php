<?php namespace App\Repositories\user\creator\offers;

use App\Models\Order;
use App\Models\OrderRequest;
use App\Models\Whitelist;

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

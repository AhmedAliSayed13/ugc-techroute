<?php namespace App\Repositories\user\client\shipping;

use App\Models\Order;
use App\Models\Task;
use App\Models\Shipping;
use Auth;

class ShippingsClientUserRepository implements ShippingsClientUserInterface
{

    public function index(): array
    {
        $ordersIds = Order::where(['user_id' => Auth::user()->id, 'shipping' => 1])->where('status', '>', 4)->pluck('id');
        $status = request('status');


        $shippingsQuery = Shipping::whereIn('order_id', $ordersIds);


        if ($status === 'true') {
            $shippingsQuery->where('active', 1);
        } elseif ($status === 'false') {
            $shippingsQuery->where('active', 0);
        }


        $shippings = $shippingsQuery->paginate(request('limit')?request('limit'):10);
        $data = array(
            'shippings' => $shippings,
            'status' => $status
        );
        return $data;
    }
    public function update($request, $id): bool
    {
        try {
            $ordersIds = Order::where(['user_id' => Auth::user()->id, 'shipping' => 1])->where('status', '>', 4)->pluck('id');
            $shipping = Shipping::whereIn('order_id', $ordersIds)->where('id', $id)->first();
            if($shipping){
                $shipping->key = $request->key;
                $shipping->tracking = $request->tracking;
                $shipping->active = 1;
                $shipping->save();
                toastr()->success(__('messages.Updated_successfully'), __('messages.successOperation'));
                return true;
            }
        } catch (\Throwable $th) {
            toastr()->error(__('messages.error'), $th->getMessage());
            return false;
        }
    }

}

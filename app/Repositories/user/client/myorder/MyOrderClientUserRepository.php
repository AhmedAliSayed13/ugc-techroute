<?php namespace App\Repositories\user\client\myorder;

use App\Models\Order;
use App\Models\OrderRequest;
use Auth;

class MyOrderClientUserRepository implements MyOrderClientUserInterface
{

    public function index(): array
    {
        $orders = Order::where(['user_id' => Auth::user()->id])->orderBy('created_at', 'desc')->paginate(Request()->limit ?? 10);
        $data = array(
            'orders' => $orders,
        );
        return $data;
    }
    public function edit($id)
    {
        $order = Order::find($id);

        if ($order->status == 1) {
            return route('client.order.checkout', $order->key);
        } elseif ($order->status == 2) {
            return route('client.order.product', $order->key);
        } elseif ($order->status == 3) {
            return route('client.order.criteria', $order->key);
        } else {
            return route('client.order.details');
        }

    }
    public function show($id): array
    {
        $order = Order::where(['id' => $id, 'user_id' => auth()->user()->id])->first();
        $data = array(
            'order' => $order,
        );
        return $data;
    }
    public function orderCreators($id): array
    {
        $order = Order::where(['id' => $id, 'user_id' => auth()->user()->id])->first();
        $data = array(
            'order' => $order,
            'orderRequests' => $order->orderRequests,
        );
        return $data;
    }
    public function chooseCreator($request, $id)
    {
        try {
            OrderRequest::where(['id' => $id])->update(['status' => $request->status]);
            toastr()->success(__('messages.success'), __('messages.successOperation'));
            return 1;

        } catch (\Illuminate\Validation\ValidationException $e) {
            // Loop through all validation errors and flash them to the session
            foreach ($e->validator->errors()->all() as $error) {
                toastr()->error(__('messages.error'), $error);
            }
            return back()->withErrors($e->validator)->withInput();
        } catch (\Throwable $th) {
            toastr()->error(__('messages.error'),$th->getMessage());
            return 0;
        }


    }

}

<?php namespace App\Repositories\user\client\myorder;

use App\Models\Order;
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

}

<?php namespace App\Repositories\user\client\myorder;

use App\Models\Order;

class MyOrderClientUserRepository implements MyOrderClientUserInterface
{

    public function index(): array
    {
        $orders = Order::all();
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

}

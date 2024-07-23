<?php

namespace App\Http\Controllers\admin\order;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\order\UpdateRequest;
use App\Models\Order;
use App\Repositories\admin\order\OrderAdminInterface;

class OrderAdminController extends Controller
{
    protected $orderAdminInterface;
    private $path = "admin.orders.";

    public function __construct(OrderAdminInterface $orderAdminInterface)
    {
        $this->orderAdminInterface = $orderAdminInterface;
    }
    public function index()
    {
        $data = $this->orderAdminInterface->index();
        // return $data['main_option_id'];
        return view($this->path . 'index', compact('data'));
    }
    public function show($id)
    {
        $data = $this->orderAdminInterface->show($id);
        // return $data;
        return view($this->path . 'index', compact('data'));
    }

    public function edit($id)
    {
        $data = $this->orderAdminInterface->edit($id);
        return view($this->path . 'edit', compact('data'));
    }
    public function update(UpdateRequest $request, $id)
    {
        // dd($order);
        $data = $this->orderAdminInterface->update($request, $id);

        return back();
    }
    public function orderConfirm($id)
    {
        $data = $this->orderAdminInterface->orderConfirm($id);

        return back();
    }

}

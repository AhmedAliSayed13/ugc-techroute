<?php

namespace App\Http\Controllers\user\client\myorder;

use App\Http\Controllers\Controller;
use App\Repositories\user\client\myorder\MyOrderClientUserInterface;

class MyOrderClientUserController extends Controller
{
    protected $myOrderClientUserInterface;
    private $path = "user.client.myorder.";

    public function __construct(MyOrderClientUserInterface $myOrderClientUserInterface)
    {
        $this->myOrderClientUserInterface = $myOrderClientUserInterface;
    }

    public function index()
    {
        $data = $this->myOrderClientUserInterface->index();
        // return $data;
        return view($this->path . 'index', compact('data'));
    }
    public function edit($id)
    {
        $data = $this->myOrderClientUserInterface->edit($id);
        // return $data;
        return redirect($data);
    }
    public function show($id)
    {
        $data = $this->myOrderClientUserInterface->show($id);
        // return $data['order']->orderOptions;
        return view($this->path . 'show', compact('data'));
    }
    public function orderRequestsReview($id)
    {
        $data = $this->myOrderClientUserInterface->orderRequestsReview($id);
        // return $data;
        return view($this->path . 'order_requests_review', compact('data'));
    }

}

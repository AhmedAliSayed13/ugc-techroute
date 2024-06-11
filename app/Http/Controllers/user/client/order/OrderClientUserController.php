<?php

namespace App\Http\Controllers\user\client\order;

use App\Http\Controllers\Controller;
use App\Repositories\user\client\order\OrderClientUserInterface;

class OrderClientUserController extends Controller
{
    protected $orderClientUserInterface;
    private $path = "user.client.order.steps.";

    public function __construct(OrderClientUserInterface $orderClientUserInterface)
    {
        $this->orderClientUserInterface = $orderClientUserInterface;
    }

    public function showDetails()
    {
        $data = $this->orderClientUserInterface->showDetails();
        return view($this->path . 'details', compact('data'));
    }
    public function details(DetailsOrderClientRequest $request)
    {
        $data = $this->orderClientUserInterface->details($request);
        return back();
    }

}

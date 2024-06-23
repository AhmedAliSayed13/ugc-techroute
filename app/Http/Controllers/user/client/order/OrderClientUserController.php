<?php

namespace App\Http\Controllers\user\client\order;

use App\Http\Controllers\Controller;
use App\Http\Requests\user\client\order\CheckoutOrderClientRequest;
use App\Http\Requests\user\client\order\DetailsOrderClientRequest;
use App\Http\Requests\user\client\order\ProductOrderClientRequest;
use App\Http\Requests\user\client\order\CriteriaOrderClientRequest;
use App\Repositories\user\client\order\OrderClientUserInterface;
use Illuminate\Http\Request;

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
        $key = $this->orderClientUserInterface->details($request);
        if ($key) {
            return redirect()->route('client.order.checkout', $key);
        }
        return back();
    }
    public function showCheckout($key)
    {
        $data = $this->orderClientUserInterface->showCheckout($key);
        return view($this->path . 'checkout', compact('data'));
    }
    public function checkout(CheckoutOrderClientRequest $request, $key)
    {
        $data = $this->orderClientUserInterface->checkout($request, $key);
        if ($data) {
            return redirect()->route('client.order.product', $data);
        }
        return back();

    }
    public function calculationPrice(Request $request)
    {
        $data = $this->orderClientUserInterface->calculationPrice($request);

        return $data;
    }

    public function showProduct($key)
    {
        $data = $this->orderClientUserInterface->showProduct($key);
        return view($this->path . 'product', compact('data'));
    }
    public function product(ProductOrderClientRequest $request, $key)
    {
        $data = $this->orderClientUserInterface->product($request, $key);
        if ($data) {
            return redirect()->route('client.order.criteria', $data);
        }
        return back();

    }
    public function showCriteria($key)
    {
        $data = $this->orderClientUserInterface->showCriteria($key);
        return view($this->path . 'criteria', compact('data'));
    }
    public function criteria(CriteriaOrderClientRequest $request, $key)
    {
        $data = $this->orderClientUserInterface->criteria($request, $key);
       
        if ($data) {
            return redirect()->route('client.my-orders.index');
        }
        return back();

    }

}

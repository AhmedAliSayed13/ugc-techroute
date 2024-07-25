<?php

namespace App\Http\Controllers\user\client\shipping;

use App\Http\Controllers\Controller;
use App\Http\Requests\user\client\shipping\UpdateShippingClientRequest;
use App\Repositories\user\client\shipping\ShippingsClientUserInterface;

class ShippingClientUserController extends Controller
{
    protected $shippingsClientUserInterface;
    private $path = "user.client.shippings.";

    public function __construct(ShippingsClientUserInterface $shippingsClientUserInterface)
    {
        $this->shippingsClientUserInterface = $shippingsClientUserInterface;
    }
    public function index()
    {
        $data = $this->shippingsClientUserInterface->index();
        // return $data;
        return view($this->path . 'index', compact('data'));
    }
    public function update(UpdateShippingClientRequest $request, $id)
    {
        $data = $this->shippingsClientUserInterface->update($request, $id);
        return back();
    }

}

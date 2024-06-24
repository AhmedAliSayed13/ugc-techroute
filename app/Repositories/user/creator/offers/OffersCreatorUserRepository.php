<?php namespace App\Repositories\user\creator\offers;

use App\Models\Order;

class OffersCreatorUserRepository implements OffersCreatorUserInterface
{

    public function index(): array
    {
        $offers = Order::where(['paid' => 1, 'status' => 4])->orderby('created_at',Request()->sort??'desc')->paginate(Request()->limit??10);
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

}

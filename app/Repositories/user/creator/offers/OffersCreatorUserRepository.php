<?php namespace App\Repositories\user\creator\offers;

use App\Models\Order;

class OffersCreatorUserRepository implements OffersCreatorUserInterface
{

    public function index(): array
    {
        $offers = Order::where(['paid' => 1, 'status' => 4])->paginate(10);
        $data = array(
            'offers' => $offers,
        );
        return $data;
    }

}

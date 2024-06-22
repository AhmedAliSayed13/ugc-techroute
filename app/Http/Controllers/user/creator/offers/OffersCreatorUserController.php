<?php

namespace App\Http\Controllers\user\creator\offers;

use App\Http\Controllers\Controller;
use App\Repositories\user\creator\offers\OffersCreatorUserInterface;

class OffersCreatorUserController extends Controller
{
    protected $offersCreatorUserInterface;
    private $path = "user.creator.offers.";

    public function __construct(OffersCreatorUserInterface $offersCreatorUserInterface)
    {
        $this->offersCreatorUserInterface = $offersCreatorUserInterface;
    }
    public function index()
    {
        $data = $this->offersCreatorUserInterface->index();
        // return $data;
        return view($this->path . 'list', compact('data'));
    }

}

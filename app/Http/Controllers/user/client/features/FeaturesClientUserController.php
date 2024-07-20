<?php

namespace App\Http\Controllers\user\client\features;

use App\Http\Controllers\Controller;
use App\Repositories\user\client\features\FeaturesClientUserInterface;


class FeaturesClientUserController extends Controller
{
    protected $featuresClientUserInterface;
    private $path = "user.client.features.";

    public function __construct(FeaturesClientUserInterface $featuresClientUserInterface)
    {
        $this->featuresClientUserInterface = $featuresClientUserInterface;
    }
    public function videos()
    {
        $data = $this->featuresClientUserInterface->videos();
        return view($this->path . 'videos', compact('data'));
    }
    public function creators()
    {
        $data = $this->featuresClientUserInterface->creators();
        return view($this->path . 'creators', compact('data'));
    }


}

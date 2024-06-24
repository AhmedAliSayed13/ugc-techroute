<?php

namespace App\Http\Controllers\website\pages;

use App\Http\Controllers\Controller;
use App\Repositories\website\pages\PagesInterface;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    protected $pagesInterface;
    private $path = "website.pages.";

    public function __construct(PagesInterface $pagesInterface)
    {
        $this->pagesInterface = $pagesInterface;

        // $this->middleware('permission:service-list|service-create|service-edit|service-delete', ['only' => ['index']]);
        // $this->middleware('permission:service-create', ['only' => ['create','store']]);
        // $this->middleware('permission:service-edit', ['only' => ['edit','update']]);
        // $this->middleware('permission:service-delete', ['only' => ['destroy']]);
    }
    public function homePage()
    {

        $data = $this->pagesInterface->homePage();

        return view($this->path . 'home', compact('data'));
    }
    public function price()
    {

        $data = $this->pagesInterface->price();

        return view($this->path . 'price', compact('data'));
    }
    public function comingSoon()
    {

        $data = $this->pagesInterface->comingSoon();

        return view($this->path . 'coming-soon', compact('data'));
    }
    public function comingSoonSave(Request $request)
    {

        $data = $this->pagesInterface->comingSoonSave($request);

        return back();
    }
    public function test()
    {
        $percentageVideoPrice=getSettingValueByKey('percentage_video_price')/100;
        return $this->getVideoPrice(300);
    }

}

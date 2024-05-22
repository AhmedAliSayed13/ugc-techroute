<?php

namespace App\Http\Controllers\Options;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Options\Pages\PagesInterface;


class PagesController extends Controller
{
    protected $pagesInterface;
    private $path="Options.Pages.";

    public function __construct(PagesInterface  $pagesInterface)
    {
        $this->pagesInterface = $pagesInterface;
    }
    public function policy()
    {
        $data = $this->pagesInterface->policy();
        return  view($this->path.'policy');
    }
}


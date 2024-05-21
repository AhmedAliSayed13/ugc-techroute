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

        // $this->middleware('permission:visitor-list|visitor-create|visitor-edit|visitor-delete', ['only' => ['index']]);
        // $this->middleware('permission:visitor-create', ['only' => ['create','store']]);
        // $this->middleware('permission:visitor-edit', ['only' => ['edit','update']]);
        // $this->middleware('permission:visitor-delete', ['only' => ['destroy']]);
    }
    public function policy()
    {
        $data = $this->pagesInterface->policy();
        return  view($this->path.'policy');
    }
}


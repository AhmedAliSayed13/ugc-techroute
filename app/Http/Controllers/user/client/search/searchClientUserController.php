<?php

namespace App\Http\Controllers\user\client\search;

use App\Http\Controllers\Controller;
use App\Repositories\user\client\search\SearchClientUserInterface;

class SearchClientUserController extends Controller
{
    protected $searchClientUserInterface;
    private $path = "user.client.search.";

    public function __construct(SearchClientUserInterface $searchClientUserInterface)
    {
        $this->searchClientUserInterface = $searchClientUserInterface;
    }
    public function searchCreators()
    {
        $data = $this->searchClientUserInterface->searchCreators();
        // return $data;
        return view($this->path . 'search_creators', compact('data'));
    }

}

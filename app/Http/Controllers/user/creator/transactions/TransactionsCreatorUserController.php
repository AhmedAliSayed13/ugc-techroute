<?php

namespace App\Http\Controllers\user\creator\transactions;

use App\Http\Controllers\Controller;
use App\Repositories\user\creator\transactions\TransactionsCreatorUserInterface;
use App\Http\Requests\user\creator\transactions\StoreTransactionsCreatorRequest;

class TransactionsCreatorUserController extends Controller
{
    protected $transactionsCreatorUserInterface;
    private $path = "user.creator.transactions.";

    public function __construct(TransactionsCreatorUserInterface $transactionsCreatorUserInterface)
    {
        $this->transactionsCreatorUserInterface = $transactionsCreatorUserInterface;
    }
    public function index()
    {
        $data = $this->transactionsCreatorUserInterface->index();
        return view($this->path . 'index', compact('data'));
    }
    public function create()
    {
        $data = $this->transactionsCreatorUserInterface->create();
        return view($this->path . 'create', compact('data'));
    }
    public function store(StoreTransactionsCreatorRequest $request)
    {
        $data = $this->transactionsCreatorUserInterface->store($request);
        return back();
    }

}

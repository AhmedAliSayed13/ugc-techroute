<?php

namespace App\Http\Controllers\admin\transaction;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\transaction\UpdateRequest;
use App\Models\Transaction;
use App\Repositories\admin\transaction\TransactionAdminInterface;

class TransactionAdminController extends Controller
{
    protected $transactionAdminInterface;
    private $path = "admin.transactions.";

    public function __construct(TransactionAdminInterface $transactionAdminInterface)
    {
        $this->transactionAdminInterface = $transactionAdminInterface;
    }
    public function index()
    {
        $data = $this->transactionAdminInterface->index();
        return view($this->path . 'index', compact('data'));
    }
    public function edit($id)
    {
        $data = $this->transactionAdminInterface->edit($id);
        return view($this->path . 'edit', compact('data'));
    }
    public function update(UpdateRequest $request, $id)
    {
        // dd($transaction);
        $data = $this->transactionAdminInterface->update($request, $id);

        return back();
    }

}

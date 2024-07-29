<?php

namespace App\Models;

use App\Models\Order;
use App\Models\Task;
use App\Models\TransactionStatus;
// use App\Models\WalletType;
use CoreProc\WalletPlus\Contracts\WalletTransaction;
use CoreProc\WalletPlus\Models\Wallet;
use CoreProc\WalletPlus\Models\WalletType;
use eloquentFilter\QueryFilter\ModelFilters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model implements WalletTransaction
{
    use HasFactory, Filterable;
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $table = 'transactions';
    protected $fillable = [
        'id',
        'wallet_type_id',
        'wallet_id',
        'order_id',
        'task_id',
        'amount',
        'transaction_status_id',
        'type',
        'created_at',
    ];
    private static $whiteListFilter = ['*'];
    public function searchFormItems()
    {
        return [
            [
                'type' => 'text',
                'title' => 'name',
                'name' => 'name',

            ],
            // [
            //     'type' => 'select',
            //     'title' => 'Account Status',
            //     'name' => 'is_active',
            //     'options' => [
            //         (object) ['id' => '0', 'name' => 'InActive'],
            //         (object) ['id' => '1', 'name' => 'Active'],
            //     ],
            // ]
        ];
    }
    public function showDetails()
    {
        return array(
            'Wallet Type' => isset($this->walletType->name) ? $this->walletType->name : '-',
            'User' => isset($this->wallet->user->name) ? $this->wallet->user->name : '-',
            'Order Number' => isset($this->order->key) ? $this->order->key : '-',
            'Task Number' => isset($this->task) ? $this->task->getTaskKey() : '-',
            'amount' => $this->amount . ' $',
            'status' => isset($this->transactionStatus->name) ? $this->transactionStatus->name : '-',
            'amount' => $this->amount,
        );
    }
    public function getAmount()
    {
        return $this->amount;
    }
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function task()
    {
        return $this->belongsTo(Task::class);
    }
    public function transactionStatus()
    {
        return $this->belongsTo(TransactionStatus::class, 'transaction_status_id');
    }
    public function walletType()
    {
        return $this->belongsTo(WalletType::class);
    }
    public function wallet()
    {
        return $this->belongsTo(Wallet::class);
    }
}

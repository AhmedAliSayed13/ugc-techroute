<?php

namespace App\Models;

use App\Models\Order;
use App\Models\Task;
use App\Models\TransactionStatus;
use CoreProc\WalletPlus\Contracts\WalletTransaction;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model implements WalletTransaction
{
    use HasFactory;
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
}

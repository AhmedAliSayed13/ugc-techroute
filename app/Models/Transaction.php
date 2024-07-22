<?php

namespace App\Models;

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
        'order_id',
        'task_id',
        'amount',
        'created_at',
    ];
    public function getAmount()
    {
        return $this->amount;
    }
}

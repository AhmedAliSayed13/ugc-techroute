<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\Task;
class Shipping extends Model
{
    use HasFactory;
    protected $table = 'shippings';
    public $timestamps = true;
    protected $fillable = [
        'id',
        'key',
        'tracking',
        'creator_address',
        'active',
        'task_id',
        'order_id',
        'created_at',
    ];
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}

<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $table = 'order_statuses';
    protected $fillable = [
        'id',
        'name',
        'created_at',

    ];

    public function orders()
    {
        return $this->hasMany(Order::class,'status');
    }
}

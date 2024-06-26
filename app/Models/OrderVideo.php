<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
class OrderVideo extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $table = 'order_videos';
    protected $fillable = [
        'id',
        'sub_key',
        'scenes',
        'mentions',
        'order_id',
        'created_at',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}

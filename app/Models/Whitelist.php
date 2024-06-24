<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Whitelist extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $table = 'order_requests';
    protected $fillable = [
        'id',
        'order_id',
        'creator_id',
        'status',
        'created_at',

    ];
}

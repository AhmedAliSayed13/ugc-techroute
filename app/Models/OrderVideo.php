<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderVideo extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $table = 'order_videos';
    protected $fillable = [
        'id',
        'scenes',
        'mentions',
        'order_id',
        'created_at',
    ];
}

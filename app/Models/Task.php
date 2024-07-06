<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $table = 'tasks';
    protected $fillable = [
        'id',
        'status',
        'video',
        'order_request_id',
        'creator_id',
        'client_id',
        'order_id',
        'created_at'
    ];
}

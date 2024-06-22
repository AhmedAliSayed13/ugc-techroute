<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderVideoOption extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $table = 'order_video_options';
    protected $fillable = [
        'id',
       'main_option_id',
       'value_options',
        'order_id',
        'created_at',
    ];
}

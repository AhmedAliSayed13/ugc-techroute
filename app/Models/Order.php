<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Order extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $table = 'orders';
    protected $fillable = [
        'id',
        'key',
        'user_id',
        'video_option_type_id',
        'video_option_duration_id',
        'video_option_aspect_id',
        'video_count',
        'video_price',
        'total',
        'created_at',

    ];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->key = Str::random(10); // Generates a random string of 10 characters
        });
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Country;
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
        'country_id',
        'gender',
        'total',
        'paid',
        'status',
        'product_name',
        'product_link',
        'product_instructions',
        'product_description',
        'created_at',

    ];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->key = Str::random(10); // Generates a random string of 10 characters
        });
    }


    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}

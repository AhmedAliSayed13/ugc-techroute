<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Country;
use App\Models\OrderVideoOption;
use App\Models\OrderRequest;
use App\Models\VideoOptionType;
use App\Models\VideoOptionDuration;
use App\Models\VideoOptionAspect;
use App\Models\Whitelist;
use App\Models\OrderVideo;
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
    public function orderOptions()
    {
        return $this->hasMany(OrderVideoOption::class);
    }
    public function orderRequests()
    {
        return $this->hasMany(OrderRequest::class);
    }
    public function whitelists()
    {
        return $this->hasMany(Whitelist::class);
    }
    public function videoOptionType()
    {
        return $this->belongsTo(VideoOptionType::class,'video_option_type_id');
    }
    public function videoOptionDuration()
    {
        return $this->belongsTo(VideoOptionDuration::class,'video_option_type_id');
    }
    public function videoOptionAspect()
    {
        return $this->belongsTo(VideoOptionAspect::class,'video_option_aspect_id');
    }

    public  function hasUserSentRequest( )
    {
        return $this->orderRequests()
                    ->where('creator_id', auth()->id())
                    ->exists()>0?0:1;
    }
    public  function hasWhitelist()
    {
        return $this->whitelists()
                    ->where('creator_id', auth()->id())
                    ->exists()>0?1:0;
        // return $this->whitelists()
        //             ->where('creator_id', auth()->id())
        //             ->exists()>0?0:1;
    }
    public function orderVideos()
    {
        return $this->hasMany(OrderVideo::class);
    }
}

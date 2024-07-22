<?php

namespace App\Models;

use App\Models\Country;
use App\Models\OrderRequest;
use App\Models\OrderStatus;
use App\Models\OrderVideo;
use App\Models\OrderVideoOption;
use App\Models\Transaction;
use App\Models\Task;
use App\Models\VideoOptionAspect;
use App\Models\VideoOptionDuration;
use App\Models\VideoOptionType;
use App\Models\Whitelist;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
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
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
    public function whitelists()
    {
        return $this->hasMany(Whitelist::class);
    }
    public function videoOptionType()
    {
        return $this->belongsTo(VideoOptionType::class, 'video_option_type_id');
    }
    public function orderStatus()
    {
        return $this->belongsTo(OrderStatus::class, 'status');
    }
    public function videoOptionDuration()
    {
        return $this->belongsTo(VideoOptionDuration::class, 'video_option_duration_id');
    }
    public function videoOptionAspect()
    {
        return $this->belongsTo(VideoOptionAspect::class, 'video_option_aspect_id');
    }

    public function hasUserSentRequest()
    {
        return $this->orderRequests()
            ->where('creator_id', auth()->id())
            ->exists() > 0 ? 0 : 1;
    }
    public function hasWhitelist()
    {
        return $this->whitelists()
            ->where('creator_id', auth()->id())
            ->exists() > 0 ? 1 : 0;
        // return $this->whitelists()
        //             ->where('creator_id', auth()->id())
        //             ->exists()>0?0:1;
    }
    public function orderVideos()
    {
        return $this->hasMany(OrderVideo::class);
    }
    public function orderVideoComplate()
    {
        $tasksCount = Task::where([['order_id', $this->id], ['task_status_id', 3]])->count();
        return $tasksCount;
    }
    public function orderFeatureOptionCount()
    {
        $count=0;
        if(isset($this->videoOptionDuration->price) && $this->videoOptionDuration->price > 0){
            $count++;
        }
        if(isset($this->videoOptionAspect->price) && $this->videoOptionAspect->price > 0){
            $count++;
        }
        return $count;
    }
    public function orderFeatureOptionPrice()
    {
        $sum=0;
        if(isset($this->videoOptionDuration->price) && $this->videoOptionDuration->price > 0){
            $sum+=$this->videoOptionDuration->price;
        }
        if(isset($this->videoOptionAspect->price) && $this->videoOptionAspect->price > 0){
            $sum+=$this->videoOptionAspect->price;
        }
        return $sum;
    }
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }


}

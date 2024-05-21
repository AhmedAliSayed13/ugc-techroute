<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use eloquentFilter\QueryFilter\ModelFilters\Filterable;
use App\Models\Customer;
use App\Models\MarketingServiceType;
use App\Models\AdsFile;
use App\Models\Category;
class Ad extends Model
{
    use HasFactory,Filterable;
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $table = 'ads';
    protected $fillable = [
        'id',
        'time',
        'date',
        'details',
        'notes',
        'publish',
        'customer_id',
        'category_id',
        'product_id',
        'customer',
        'marketing_service_type_id',
        'marketing_service_type',
        'user_id',
    ];

    private static $whiteListFilter =[
        'time',
        'date',
        'details',
        'notes',
        'publish',
        'customer_id',
        'category_id',
        'marketing_service_type_id',
        'user_id',
    ];
    public function showDetails(){
        return array(
            'customer'=>$this->customer,
            'service type'=>$this->marketing_service_type ,
            'marketer'=>isset($this->user->name)?$this->user->name:'' ,
            'category'=>isset($this->category->name)?$this->category->name:'' ,
            'time'=>$this->time,
            'date'=>$this->date,
            'Publish'=>$this->publish?'On':'Off',
            'details'=>$this->details,
            'notes'=>$this->notes,
        );
    }
    public function searchFormItems(){
        return [
            [
                'type'=>'select',
                'title'=>'customer',
                'name'=>'customer_id',
                'options'=>Customer::all(),
            ],
            [
                'type'=>'select',
                'title'=>'service type',
                'name'=>'marketing_service_type_id',
                'options'=>marketingServiceType::all(),
            ],
            [
                'type'=>'select',
                'title'=>'category',
                'name'=>'category_id',
                'options'=>Category::all(),
            ],
            [
                'type'=>'select',
                'title'=>'user',
                'name'=>'user_id',
                'options'=>user::all(),
            ],
            [
                'type'=>'time',
                'name'=>'time',
                'title'=>'time',
            ],
            [
                'type'=>'date',
                'name'=>'date',
                'title'=>'date',
            ],
            [
                'type'=>'checkbox',
                'name'=>'publish',
                'title'=>'Publish',
            ],
        ];
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function marketingServiceType()
    {
        return $this->belongsTo(MarketingServiceType::class,'marketing_service_type_id');
    }
    public function adsFiles()
    {
        return $this->hasMany(AdsFile::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use eloquentFilter\QueryFilter\ModelFilters\Filterable;
class Contract extends Model
{
    use HasFactory,Filterable;
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $table = 'contracts';
    protected $fillable = [
        'id',
        'name',
        'phone',
        'price',
        'payment_method',
        'date_first_payment',
        'date_second_payment',
        'date_third_payment',
        'reason_delayed_payment',
        'new_payment_date',
        'payment_status',
        'contract_type_id',
        'customer_id',
        'created_at',
        
    ];

    private static $whiteListFilter =[
        'id',
        'name',
        'phone',
        'price',
        'payment_method',
        'date_first_payment',
        'date_second_payment',
        'date_third_payment',
        'reason_delayed_payment',
        'new_payment_date',
        'payment_status',
        'contract_type_id',
        'customer_id',
        'created_at',
    ];
    public function showDetails(){
        return array(
            
            'id'=>$this->id,
            'Type'=>isset($this->marketingServiceType->name)?$this->marketingServiceType->name:'-',
            'Customer'=>isset($this->customer->name)?$this->customer->name:'-',
            'Name'=>$this->name,
            'Phone'=>$this->phone,
            'Price'=>$this->price,
            'Payment Method'=>$this->payment_method,
            'First Payment Date'=>$this->date_first_payment,
            'Second Payment Date'=>$this->date_second_payment,
            'Third Payment Date'=>$this->date_third_payment,
            'New Payment Date'=>$this->new_payment_date,
            'Payment Status'=>$this->payment_status?'On':'Off',
            'Date'=>$this->created_at,
            'Reason Delayed Payment'=>$this->reason_delayed_payment,
            
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
                'options'=>MarketingServiceType::all(),
            ],
            
            [
                'type'=>'text',
                'title'=>'Name',
                'name'=>'name',
               
            ],
            [
                'type'=>'text',
                'title'=>'Phone',
                'name'=>'phone',
               
            ],
            [
                'type'=>'number',
                'title'=>'Price',
                'name'=>'price',
               
            ],
            
        ];
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function marketingServiceType()
    {
        return $this->belongsTo(MarketingServiceType::class,'contract_type_id');
    }
    public function options()
    {
        return $this->hasMany(Option::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use eloquentFilter\QueryFilter\ModelFilters\Filterable;
use App\Models\Ad;
class MarketingServiceType extends Model
{
    use HasFactory,Filterable;
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $table = 'marketing_service_types';
    protected $fillable = [
        'id',
        'name',
        'created_at'
    ];
    private static $whiteListFilter =[
        'id',
        'name',
    ];
    public function showDetails(){
        return array(
            'id'=>$this->id,
            'name'=>$this->name,
        );
    }
    public function searchFormItems(){
        return [
            [
                'type'=>'text',
                'title'=>'name',
                'name'=>'name',
            ],
        ];
    }
    public function ads()
    {
        return $this->hasMany(Ad::class);
    }
}

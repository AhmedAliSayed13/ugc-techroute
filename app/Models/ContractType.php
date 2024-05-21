<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use eloquentFilter\QueryFilter\ModelFilters\Filterable;
class ContractType extends Model
{
    use HasFactory,Filterable;
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $table = 'contract_types';
    protected $fillable = [
        'id',
        'name',
        'created_at',
        
    ];

    private static $whiteListFilter =[
        'name',
        'created_at',
    ];
    public function showDetails(){
        return array(
            
            'id'=>$this->id,
            'name'=>$this->name,
            'Date'=>$this->created_at,
            
        );
    }
    public function searchFormItems(){
        return [
            [
                'type'=>'text',
                'title'=>'Name',
                'name'=>'name',
               
            ]
            
        ];
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use eloquentFilter\QueryFilter\ModelFilters\Filterable;
class Category extends Model
{
    use HasFactory,Filterable;
    protected $fillable = [
        'name'
    ];

    private static $whiteListFilter =[
        'name'
        
    ];
    public function showDetails(){
        return array(
            'id'=>$this->id,
            'Name'=>$this->name
            
        );
    }
    public function searchFormItems(){
        return [
           
            [
                'type'=>'text',
                'name'=>'name',
                'title'=>'Name',
            ]
        ];
    }
    
}

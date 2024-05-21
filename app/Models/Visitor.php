<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use eloquentFilter\QueryFilter\ModelFilters\Filterable;

class Visitor extends Model
{
    use HasFactory,Filterable;
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $table = 'visitors';
    protected $fillable = [
        'id',
        'name',
        'redirect',
        'key',
        'count',
        'created_at'
    ];
    private static $whiteListFilter =[
        'id',
        'name',
        'redirect',
        'key',
        'count',
    ];
    public function showDetails(){
        return array(
            'id'=>$this->id,
            'name'=>$this->name,
            'redirect'=>$this->redirect,
            'key'=>$this->key,
            'count'=>$this->count,
        );
    }
    public function searchFormItems(){
        return [
            [
                'type'=>'text',
                'title'=>'name',
                'name'=>'name',
            ],
            [
                'type'=>'text',
                'title'=>'redirect',
                'name'=>'redirect',
            ],
            [
                'type'=>'text',
                'title'=>'key',
                'name'=>'key',
            ],
            [
                'type'=>'number',
                'title'=>'count',
                'name'=>'count',
            ],
        ];
    }
}

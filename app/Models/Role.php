<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use eloquentFilter\QueryFilter\ModelFilters\Filterable;
class Role extends Model
{
    use HasFactory,Filterable;
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = [
        'id',
        'name',
        'guard_name',
        'created_at'
    ];
    private static $whiteListFilter = ['*'];
    public function searchFormItems(){
        return [

        ];
    }
    public function showDetails(){
        return array(
            'name'=>$this->name,

        );
    }

}

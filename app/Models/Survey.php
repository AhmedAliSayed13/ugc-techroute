<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use eloquentFilter\QueryFilter\ModelFilters\Filterable;
class Survey extends Model
{
    use HasFactory,Filterable;
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $table = 'survey_emails';
    protected $fillable = [
        'id',
        'email',
        'key',
        'reason',
        'answer'
    ];
    private static $whiteListFilter =[
        'id',
        'email',
        'key',
        'answer'
    ];
    public function showDetails(){
        return array(
            'id'=>$this->id,
            'email'=>$this->email,
            'key'=>$this->key,
            'answer'=>$this->answer?'Yes':'No',
            'reason'=>$this->reason,
        );
    }
    public function searchFormItems(){
        return [
            [
                'type'=>'email',
                'title'=>'email',
                'name'=>'email',
            ],
            [
                'type'=>'text',
                'title'=>'key',
                'name'=>'key',
            ],
            [
                'type'=>'text',
                'title'=>'answer',
                'name'=>'answer',
            ],
        ];
    }
    public function YesUrl(){
       return route('survey.answer',[
        'key'=>$this->key,
        'answer'=>1
       ]);
    }
    public function NoUrl(){
       return route('survey.answer',[
        'key'=>$this->key,
        'answer'=>0
       ]);
    }
}

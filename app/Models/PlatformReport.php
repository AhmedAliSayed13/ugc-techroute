<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use eloquentFilter\QueryFilter\ModelFilters\Filterable;
use App\Models\PlatformAccount;
class PlatformReport extends Model
{
    use HasFactory,Filterable;
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $table = 'platform_reports';
    protected $fillable = [
        'id',
        'day',
        'posts',
        'total_posts',
        'before',
        'after',
        'difference',
        'platform_id',
        'platform_account_id',
        'created_at'
    ];
    private static $whiteListFilter =[
        'id',
        'day',
        'posts',
        'total_posts',
        'before',
        'after',
        'difference',
        'platform_id',
        'platform_account_id',
        'created_at'
    ];
    public function showDetails(){
        return array(
            'id'=>$this->id,
            'day'=>$this->day,
            'posts'=>$this->posts,
            'total_posts'=>$this->total_posts,
            'before'=>$this->before,
            'after'=>$this->after,
            'difference'=>$this->difference,
            'platform_id'=>$this->platform_id,
            'platform_account_id'=>$this->platform_account_id,
        );
    }
    public function searchFormItems(){
        return [
            [
                'type'=>'text',
                'title'=>'day',
                'name'=>'day',
            ],
            [
                'type'=>'text',
                'title'=>'posts',
                'name'=>'posts',
            ],
            [
                'type'=>'text',
                'title'=>'before',
                'name'=>'before',
            ],
            [
                'type'=>'text',
                'title'=>'after',
                'name'=>'after',
            ],
            [
                'type'=>'text',
                'title'=>'difference',
                'name'=>'difference',
            ],
            [
                'type'=>'text',
                'title'=>'platform_id',
                'name'=>'platform_id',
            ],
            [
                'type'=>'text',
                'title'=>'platform_account_id',
                'name'=>'platform_account_id',
            ],
        ];
    }
    public function platformAccount()
    {
        return $this->belongsTo(PlatformAccount::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use eloquentFilter\QueryFilter\ModelFilters\Filterable;
use App\Models\PlatformReport;
use App\Models\Platform;
class PlatformAccount extends Model
{
    use HasFactory,Filterable;
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $table = 'platform_accounts';
    protected $fillable = [
        'id',
        'name',
        'username',
        'group',
        'platform_id',
        'created_at'
    ];
    private static $whiteListFilter =[
        'id',
        'name',
        'username',
        'group',
        'platform_id',
        'created_at'
    ];
    public function showDetails(){
        return array(
            'id'=>$this->id,
            'name'=>$this->name,
            'username'=>$this->username,
            'platform_id'=>$this->platform_id,
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
                'title'=>'username',
                'name'=>'username',
            ]
        ];
    }

    public function platformReports(): HasMany
    {
        return $this->hasMany(PlatformReport::class);
    }
    public function platform()
    {
        return $this->belongsTo(Platform::class);
    }
}

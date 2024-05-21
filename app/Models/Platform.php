<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use eloquentFilter\QueryFilter\ModelFilters\Filterable;
use App\Models\PlatformAccount;
class Platform extends Model
{
    use HasFactory,Filterable;
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $table = 'platforms';
    protected $fillable = [
        'id',
        'name',
        'created_at'
    ];

    public function showDetails(){
        return array(
            'name'=>$this->name,
            'date'=>$this->created_at
        );
    }
    public function platformAccounts(): HasMany
    {
        return $this->hasMany(PlatformAccount::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use eloquentFilter\QueryFilter\ModelFilters\Filterable;
use App\Models\Ad;
class AdsFile extends Model
{
    use HasFactory,Filterable;
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $table = 'marketing_ads_files';
    protected $fillable = [
        'id',
        'url',
        'ad_id',
        'created_at'
    ];
    public function ad()
    {
        return $this->belongsTo(Ad::class,'marketing_service_type_id');
    }
}

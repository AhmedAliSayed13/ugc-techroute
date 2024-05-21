<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $table = 'options';
    protected $fillable = [
        'id',
        'value',
        'marketing_service_type_id',
        'contract_id',
        'created_at',
        
    ];

    public function contract()
    {
        return $this->belongsTo(Contract::class);
    }
    
    
}

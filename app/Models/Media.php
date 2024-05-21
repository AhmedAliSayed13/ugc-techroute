<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;
class Media extends Model
{
    use HasFactory;
    protected $table = 'medias';
    protected $fillable = [
        'name',
        'path',
        'short_url',
        'real_url',
        'type',
        'customer_id',
    ];
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}

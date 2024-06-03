<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Country extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $table = 'countries';
    protected $fillable = [
        'id',
        'name',
        'code',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}

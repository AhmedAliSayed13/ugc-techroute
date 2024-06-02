<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreatorInfo extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $table = 'creator_infos';
    protected $fillable = [
        'id',
        'user_id',
        'country_id',
        'birthdate',
        'gender',
        'languages',
        'describe',
        'created_at',
        'updated_at',
    ];
}

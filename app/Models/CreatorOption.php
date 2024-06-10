<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreatorOption extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'creator_options';
    public $incrementing = true;
    protected $fillable = [
        'id',
        'user_id',
        'main_option_id',
        'value_options',
        'created_at',
    ];
}

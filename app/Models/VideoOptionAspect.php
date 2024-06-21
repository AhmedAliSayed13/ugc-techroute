<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoOptionAspect extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'video_option_aspects';
    public $incrementing = true;
    protected $fillable = [
        'id',
        'name',
        'price',
        'is_active',
        'describe',
        'created_at',
    ];
    private static $whiteListFilter = ['*'];
}

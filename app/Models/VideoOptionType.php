<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoOptionType extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'video_option_types';
    public $incrementing = true;
    protected $fillable = [
        'id',
        'name',
        'is_active',
        'price',
        'created_at',
    ];
    private static $whiteListFilter = ['*'];
}

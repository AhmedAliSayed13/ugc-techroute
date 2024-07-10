<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoOptionDuration extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'video_option_durations';
    public $incrementing = true;
    protected $fillable = [
        'id',
        'price',
        'is_active',
        'time',
        'scenes',
        'created_at',
    ];
    private static $whiteListFilter = ['*'];
}

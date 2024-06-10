<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class FeatureVideo extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'feature_videos';
    public $incrementing = true;
    protected $fillable = [
        'id',
        'path',
        'user_id',
        'created_at',
    ];

    public function getVideoUrlAttribute()
    {
        return Storage::disk('public')->url($this->path);
    }

}

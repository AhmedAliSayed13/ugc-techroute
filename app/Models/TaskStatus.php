<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskStatus extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $table = 'task_statuses';
    protected $fillable = [
        'id',
        'name',
        'created_at',
    ];
}

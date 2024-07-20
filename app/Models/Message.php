<?php

namespace App\Models;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Message extends Model
{
    use HasFactory;
    protected $table = 'messages';
    protected $fillable = [
        'task_id',
        'user_id',
        'content',
        'is_read',
        'created_at',
    ];

    public function task()
    {
        return $this->belongsTo(Task::class, 'task_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function sendByMe()
    {
        if ($this->user_id === Auth::user()->id) {
            return true;
        } elseif ($this->task->user_id == null) {
            return null;
        } else {
            return false;
        }

    }

}

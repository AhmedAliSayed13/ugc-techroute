<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Models\Task;
use App\Models\User;
class Message extends Model
{
    use HasFactory;
    protected $table = 'messages';
    protected $fillable = [
        'task_id',
        'user_id',
        'content',
        'created_at',
    ];

    public function task()
    {
        return $this->belongsTo(Task::class,'task_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function sendByMe()
    {
        if($this->user_id===Auth::user()->id){
            return true;
        }elseif($this->task->user_id==NULL){
            return NULL;
        }else{
            return false;
        }

    }

}

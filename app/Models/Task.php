<?php

namespace App\Models;

use App\Models\Order;
use App\Models\TaskStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $table = 'tasks';
    protected $fillable = [
        'id',
        'task_status_id',
        'video',
        'order_request_id',
        'creator_id',
        'client_id',
        'order_id',
        'created_at',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    public function taskStatus()
    {
        return $this->belongsTo(TaskStatus::class, 'task_status_id');
    }
    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }
    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }
    public function getTaskKey()
    {
        return $this->order->key . '|' . $this->id;
    }
    public function creatorAllowedUpdate()
    {
        if(in_array($this->task_status_id, [1,4])){
            return true;
        }else{
            return false;
        }
    }
    public function clientAllowedUpdate()
    {
        if(in_array($this->task_status_id, [2])){
            return true;
        }else{
            return false;
        }
    }
    public function taskComplate()
    {
        if($this->task_status_id==3 && $this->video!=null){
            return true;
        }else{
            return false;
        }
    }

    public function messages()
    {
        return $this->hasMany(Message::class,'task_id');
    }


}

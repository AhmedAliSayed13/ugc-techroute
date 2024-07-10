<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Queue\SerializesModels;

class MessageSent implements ShouldBroadcast
{
    use InteractsWithSockets, SerializesModels;

    public $message;
    public $task_id;

    public function __construct($message, $task_id)
    {
        $this->message = $message;
        $this->task_id = $task_id;
    }

    public function broadcastOn()
    {
        return new PrivateChannel('task.' . $this->task_id);
    }
}

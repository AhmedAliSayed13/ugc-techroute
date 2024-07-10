<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function sendMessage(Request $request)
    {
        $message = $request->input('message');
        $task_id = $request->input('task_id');

        // Save message to database if needed

        broadcast(new MessageSent($message, $task_id))->toOthers();

        return response()->json(['status' => 'Message Sent!']);
    }
}

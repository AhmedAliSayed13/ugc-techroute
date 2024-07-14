<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Events\NewMessageEvent;
use Illuminate\Support\Facades\Auth;
class ChatController extends Controller
{
    public function show($task_id)
    {
        $messages = Message::where('task_id', $task_id)->get();

        return view('chats.show', compact('task_id', 'messages'));
    }

    public function storeMessage(Request $request, $task_id)
    {
        $message = new Message();
        $message->user_id = Auth::user()->id;
        $message->content = $request->content;
        $message->task_id = $task_id;
        $message->save();

        event(new NewMessageEvent($message));

        return response()->json(['message' => 'Message sent successfully']);
    }
}

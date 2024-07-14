<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function show($chatKey)
    {
        $messages = Message::where('chat_key', $chatKey)->get();

        return view('chats.show', compact('chatKey', 'messages'));
    }

    public function storeMessage(Request$request, $chatKey)
    {
        $message = new Message();
        $message->user_id = $request->user_id;
        $message->content = $request->content;
        $message->chat_key = $chatKey;
        $message->save();

        event(new \App\Events\NewMessageEvent($message));

        return response()->json(['message' => 'Message sent successfully']);
    }
}

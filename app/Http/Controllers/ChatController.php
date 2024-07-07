<?php

namespace App\Http\Controllers;

use App\Events\NewMessageEvent;
use App\Models\Message;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function sendMessage(Request $request)
    {
        // Create the message
        $message = Message::create([
            'user_id' => auth()->id(),
            'content' => $request->input('content'),
        ]);

        // Trigger the Pusher event
        event(new NewMessageEvent($message));

        // Return the response
        return response()->json(['message' => 'Message sent successfully']);
    }
}

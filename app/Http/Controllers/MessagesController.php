<?php

namespace App\Http\Controllers;

use App\Events\MessageEvent;
use App\Models\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function sendMessage(Request $request)
    {
        $user_id = $request->user_id;
        $chat_id = $request->chat_id;
        $message_content = $request->message;
        $message = Message::create([
            'sender_id' => $user_id,
            'chat_id' => $chat_id,
            'message_content' => $message_content,
        ]);
        //test
        // event(new MessageEvent($message));
        //end test
        event(new MessageEvent($user_id, $chat_id, $message_content));
        return response()->json([], 200);
    }
}

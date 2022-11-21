<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Models\Message;
use Illuminate\View\View;


class MessageController extends Controller
{
    public function index(): View
    {
        $messages = Message::paginate(5);

        return view('messages', ['messages' => $messages]);
    }

    public function addMessage(MessageRequest $request)
    {
        $message = Message::create($request->validated());
        if (!$message) {
            return redirect()->back()->withErrors(['msg' => 'Message creation failed']);
        }

        return redirect()->route('message.show')->with('message', 'Message successfully added');
    }
}

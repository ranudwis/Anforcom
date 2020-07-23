<?php

namespace App\Http\Controllers;

use App\Anforcom\Notification\Message\ContactMessage;
use App\Anforcom\Notification\Notifier\DiscordNotification;
use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'requirement' => 'required',
            'contact' => 'required',
            'message' => 'required'
        ]);

        $message = Message::create($request->all());

        $contactMessage = new ContactMessage($message);
        $discordNotifier = new DiscordNotification();
        $discordNotifier->send($contactMessage);

        return [ 'sent' => true ];
    }
}

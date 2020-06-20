<?php

namespace App\Listeners;

use App\Events\NewUserRegistered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Anforcom\Notification\Message\NewUserRegistered as NewUserMessage;
use App\Anforcom\Notification\Notifier\DiscordNotification;

class SendDiscordRegistrationNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NewUserRegistered  $event
     * @return void
     */
    public function handle(NewUserRegistered $event)
    {
        $user = $event->getNewUser();
        $message = new NewUserMessage($user);
        $discordNotifier = new DiscordNotification('Pendaftaran baru Anforcom');

        $discordNotifier->send($message);
    }
}

<?php

namespace App\Listeners;

use App\Events\NewEventRegistration;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Anforcom\Notification\Message\NewEventRegistration as NewEventRegistrationMessage;
use App\Anforcom\Notification\Notifier\DiscordNotification;

class SendEventRegistrationNotification
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
     * @param  NewEventRegistration  $event
     * @return void
     */
    public function handle(NewEventRegistration $event)
    {
        $registration = $event->getRegistration();
        $team = $event->getTeam();
        $message = new NewEventRegistrationMessage($registration, $team);
        $discordNotifier = new DiscordNotification();

        $discordNotifier->send($message);
    }
}

<?php

namespace App\Listeners;

use App\Events\IncomingPayment;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Anforcom\Notification\Message\PaymentNotification;
use App\Anforcom\Notification\Notifier\DiscordNotification;

class SendPaymentNotification
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
     * @param  IncomingPayment  $event
     * @return void
     */
    public function handle(IncomingPayment $event)
    {
        $registration = $event->getRegistration();

        $message = new PaymentNotification($registration);
        $discordNotifier = new DiscordNotification();

        $discordNotifier->send($message);
    }
}

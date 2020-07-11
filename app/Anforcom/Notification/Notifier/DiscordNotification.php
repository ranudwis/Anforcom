<?php

namespace App\Anforcom\Notification\Notifier;

class DiscordNotification extends Discord
{
    public function __construct(string $apiUrl = null)
    {
        parent::__construct($apiUrl);

        if (is_null($this->apiUrl)) {
            $this->apiUrl = env('ANFORCOM_DISCORD_NOTIFICATION_WEBHOOK_URL');
        }
    }
}

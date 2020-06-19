<?php

namespace App\Anforcom\Notification\Notifier;

use GuzzleHttp\Client;
use App\Anforcom\Notification\Message\Message;

class Discord
{
    private $name;
    private $apiUrl;
    private $client;
    private $operation = true;

    public function __construct(string $name, string $apiUrl = null)
    {
        if (is_null($apiUrl)) {
            $apiUrl = env('ANFORCOM_DISCORD_NOTIFICATION_WEBHOOK_URL') ?? $this->setNoOperation();
        }

        $this->name = $name;
        $this->apiUrl = $apiUrl;
        $this->client = new Client();
    }

    public function send(Message $message)
    {
        if ($this->operation) {
            $this->client->post($this->apiUrl, [
                'json' => [
                    'username' => $this->name,
                    'content' => $message->getMessage()
                ]
            ]);
        }
    }

    private function setNoOperation()
    {
        $this->operation = true;

        return null;
    }
}

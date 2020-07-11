<?php

namespace App\Anforcom\Notification\Notifier;

use GuzzleHttp\Client;
use App\Anforcom\Notification\Message\Message;

class Discord
{
    protected $apiUrl;
    protected $client;
    protected $operation = true;

    public function __construct(string $apiUrl = null)
    {
        $this->apiUrl = $apiUrl;
        $this->client = new Client();
    }

    public function send(Message $message)
    {
        if (is_null($this->apiUrl)) {
            return;
        }

        $this->client->post($this->apiUrl, [
            'json' => [
                'username' => $message->getTitle(),
                'content' => $message->getMessage()
            ]
        ]);
    }
}

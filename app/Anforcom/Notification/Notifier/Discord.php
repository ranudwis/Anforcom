<?php

namespace App\Anforcom\Notification\Notifier;

use GuzzleHttp\Client;
use App\Anforcom\Notification\Message\Message;

class Discord
{
    protected $name;
    protected $apiUrl;
    protected $client;
    protected $operation = true;

    public function __construct(string $name, string $apiUrl = null)
    {
        $this->name = $name;
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
                'username' => $this->name,
                'content' => $message->getMessage()
            ]
        ]);
    }
}

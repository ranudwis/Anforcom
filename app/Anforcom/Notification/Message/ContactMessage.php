<?php

namespace App\Anforcom\Notification\Message;

use App\Message as MessageModel;

class ContactMessage implements Message
{
    private $requirement;
    private $contact;
    private $message;

    public function __construct(MessageModel $message)
    {
        $this->requirement = $message->requirement;
        $this->contact = $message->contact;
        $this->message = $message->message;
    }

    public function getTitle()
    {
        return 'Pesan [' . $this->requirement . ']';
    }

    public function getMessage()
    {
        return <<<MESSAGE
        Kontak: {$this->contact}

        {$this->message}
        MESSAGE;
    }
}

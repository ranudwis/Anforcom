<?php

namespace App\Anforcom\Notification\Message;

interface Message
{
    public function getTitle();
    public function getMessage();
}

<?php

namespace App\Anforcom\Notification\Message;

use App\User;

class NewUserRegistered implements Message
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getTitle()
    {
        return 'Pendaftaran Baru Anforcom';
    }

    public function getMessage()
    {
        return <<<MESSAGE
        Nama: {$this->user->name}
        Email: {$this->user->email}
        Kontak: {$this->user->contact}
        MESSAGE;
    }
}

<?php

namespace App\Anforcom\Notification\Message;

use App\Registration;
use App\Team;
use Storage;

class NewEventRegistration implements Message
{
    private $registration;
    private $team;

    public function __construct(Registration $registration, Team $team)
    {
        $registration->load('event');
        $team->load('leader');

        $this->registration = $registration;
        $this->team = $team;
    }

    public function getTitle()
    {
        return 'Pendaftaran baru: ' . $this->registration->event->name;
    }

    public function getMessage()
    {
        $leader = $this->team->leader;

        return <<<MESSAGE
        [{$this->registration->event->name}]

        Nama Tim: {$this->team->name}
        Universitas: {$this->team->university}
        Ketua tim: {$leader->name} {$leader->email} {$leader->contact}
        MESSAGE;
    }
}

<?php

namespace App\Anforcom\Notification\Message;

use App\Registration;
use App\Team;

class NewEventRegistration implements Message
{
    private $registration;
    private $team;

    public function __construct(Registration $registration, Team $team)
    {
        $registration->load('event');
        $team->load('leader', 'members');

        $this->registration = $registration;
        $this->team = $team;
    }

    public function getTitle()
    {
        return 'Pendaftaran Baru [' . $this->registration->event->name . ']';
    }

    public function getMessage()
    {
        $leader = $this->team->leader;
        $members = '';

        foreach ($this->team->members as $i => $member) {
            $number = $i + 1;
            $members .= <<<MEMBER
            Anggota ke-{$number}
            Nama: {$member->name}
            Email: {$member->email}
            Kontak: {$member->contact}

            MEMBER;
        }

        return <<<MESSAGE
        Nama Tim: {$this->team->name}
        Universitas: {$this->team->university}
        Ketua tim: {$leader->name} {$leader->email} {$leader->contact}

        {$members}
        MESSAGE;
    }
}

<?php

namespace App\Anforcom\Notification\Message;

use App\Registration;
use Storage;

class PaymentNotification implements Message
{
    private $registration;

    public function __construct(Registration $registration)
    {
        $this->registration = $registration;
        $this->registration->load('teams.leader', 'event');
    }

    public function getTitle()
    {
        return 'Pembayaran [' . $this->registration->event->name . ']';
    }

    public function getMessage()
    {
        $imageUrl = url(Storage::url($this->registration->payment_confirmation));
        $dashboardUrl = route('admin.payment.show', ['id' => $this->registration->event->id ]);
        $leader = $this->registration->teams->leader;

        return <<<MESSAGE
        Nama Tim: {$this->registration->teams->name}
        Universitas: {$this->registration->teams->university}
        Ketua Tim: {$leader->name} {$leader->email} {$leader->contact}

        Bukti pembayaran: {$imageUrl}
        Konfirmasi Pembayaran: {$dashboardUrl}
        MESSAGE;
    }
}

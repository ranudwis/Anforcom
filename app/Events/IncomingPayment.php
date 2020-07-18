<?php

namespace App\Events;

use App\Registration;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class IncomingPayment
{
    use Dispatchable;
    use InteractsWithSockets;
    use SerializesModels;

    private $registration;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Registration $registration)
    {
        $this->registration = $registration;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }

    public function getRegistration()
    {
        return $this->registration;
    }
}

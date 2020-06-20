<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Registration;
use App\Team;

class NewEventRegistration
{
    use Dispatchable;
    use InteractsWithSockets;
    use SerializesModels;

    private $registration;
    private $team;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Registration $registration, Team $team)
    {
        $this->registration = $registration;
        $this->team = $team;
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

    public function getTeam()
    {
        return $this->team;
    }
}

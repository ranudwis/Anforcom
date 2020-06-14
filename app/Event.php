<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }

    public function timelines()
    {
        return $this->hasMany(Timeline::class);
    }

    public function registrationTimeline()
    {
        return $this->timelines->firstWhere('id', $this->register_timeline_id) ?? (object) [
            'id' => 0,
            'start' => null,
            'end' => null,
        ];
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = ['event_id'];

    public function teams()
    {
        return $this->hasOne(Team::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function isActive()
    {
        return $this->status === 'active';
    }

    public function isRejected()
    {
        return $this->status === 'rejected';
    }

    public function isPaid()
    {
        return $this->status === 'paid';
    }

    public function isInactive()
    {
        return $this->status === 'inactive';
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    protected $dates = ['start', 'end'];

    protected $fillable = [
        'event_id', 'start', 'end', 'name', 'description', 'venue'
    ];

    public function getRangeString()
    {
        return $this->start->format('j F Y') .
            ' - ' .
            $this->end->format('j F Y');
    }
}

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
        $formatString = 'j F Y';

        if ($this->start == $this->end) {
            return $this->start->format($formatString);
        }

        return $this->start->format($formatString) .
            ' - ' .
            $this->end->format($formatString);
    }
}

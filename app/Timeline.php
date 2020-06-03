<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    protected $fillable = [
        'event_id', 'start', 'end', 'name', 'description', 'venue'
    ];
}

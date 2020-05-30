<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    //

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}

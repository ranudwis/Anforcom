<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'event_id', 'timeline_id', 'name', 'description',
    ];


    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }

    public function competition()
    {
        return $this->belongsTo(Competition::class);
    }
}

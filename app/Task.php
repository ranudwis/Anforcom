<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'competition_id', 'name', 'description', 'deadline'
    ];


    public function submission()
    {
        return $this->hasMany(Submission::class);
    }
    public function competition()
    {
        return $this->belongsTo(Competition::class);
    }
}

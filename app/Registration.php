<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = ['event_id'];

    public function teams()
    {
        return $this->hasMany(Team::class);
    }
}

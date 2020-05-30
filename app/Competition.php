<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    protected $fillable = [
        'name', 'description'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function task()
    {
        return $this->hasMany(Task::class);
    }
}

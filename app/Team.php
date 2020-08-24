<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name', 'leader_id', 'competition_id', 'university', 'leader_nim', 'leader_ktm', 'tgl_lahir'
    ];

    public function members()
    {
        return $this->hasMany(Member::class);
    }

    public function leader()
    {
        return $this->belongsTo(User::class, 'leader_id');
    }

    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }
}

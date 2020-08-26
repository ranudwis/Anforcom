<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'name', 'email', 'contact', 'instation', 'nim', 'ktm', 'tgl_lahir'
    ];
}

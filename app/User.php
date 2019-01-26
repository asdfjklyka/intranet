<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public $timestamps = false;

    protected $fillable = [
        'name', 'email', 'password', 'role', 'status'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}

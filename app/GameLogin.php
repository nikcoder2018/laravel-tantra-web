<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class GameLogin extends Authenticatable
{
    use Notifiable;

    protected $guard = 'gamelogin';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userid', 'password',
    ];

    protected $table = 'gamelogin';
}

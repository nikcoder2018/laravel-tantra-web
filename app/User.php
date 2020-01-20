<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userid', 'email', 'password', 'userkey', 'firstname', 'lastname', 'blocked_enddate', 'reg_ipaddress', 'activation_code', 'verify_token','profile_picture',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function relationship(){
        return $this->hasMany('App\Post');
    }

    protected $table = 'Account';
    
    /* app/User.php */
    const ADMIN_TYPE = 'admin';
    const DEFAULT_TYPE = 'default';

    public function isAdmin()    {        
        return $this->type === self::ADMIN_TYPE;    
    }

}

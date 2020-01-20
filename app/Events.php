<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    //connection
    protected $connection = 'sqlsrv2';

    //Table Name
    protected $table = 'Events';

    //Fillable
    protected $fillable = [
        'title', 'description', 'photo', 'prizes', 'gm', 'start', 'ends','type',
    ];
}

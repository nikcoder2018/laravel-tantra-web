<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prizes extends Model
{
    //Connection
    protected $connection = 'sqlsrv2';

    //Table Name
    protected $table = 'Prizes';
}

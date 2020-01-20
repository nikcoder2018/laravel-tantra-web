<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $connection = 'sqlsrv2';
    
    protected $table = 'StoreItems';

}

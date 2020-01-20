<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'World','Account','ItemIndex','ItemCount',
    ];

    protected $connection = "sqlsrv2";
    protected $table = "TantraItem";
}

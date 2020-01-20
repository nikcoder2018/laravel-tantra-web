<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //table_name
    protected $table = 'posts';
    //primary_key
    public $primary_key = 'id';
    //time_stamps
    public $timestamps = true;
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}


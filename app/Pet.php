<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    public function users(){
        return $this->belongsTo('App\User');
    }

    public function pets(){
        return $this->hasMany('App\Channel');
    }
}

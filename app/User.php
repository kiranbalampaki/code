<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'firstname', 'lastname', 'email', 'password',
    ];

    public function blogs(){
        return $this->hasMany('App\Blog');
    }
    // public function messages(){
    //     return $this->hasMany('App\Message');
    // }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function pets(){
        return $this->hasMany('App\Pet');
    }

    public function channels(){
        return $this->belongsToMany('App\Channel');
    }

    public function messages(){
        return $this->belongsToMany('App\Message');
    }

    public function orders(){
        return $this->hasMany('App\Order');
    }
}

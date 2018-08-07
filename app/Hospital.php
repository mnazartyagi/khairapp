<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Hospital extends Authenticatable
{
    protected $guard='hospital';
    
    protected $table='hospitals';

    protected $fillable = [
        'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
     
    public function ambiances()
    {
        return $this->belongsToMany('App\Ambiance');
    }

    public function treatments()
    {
        return $this->belongsToMany('App\Treatment');
    }
}

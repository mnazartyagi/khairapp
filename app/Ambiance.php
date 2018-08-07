<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ambiance extends Model
{
    protected $table='ambiances';
    
    public function hospitals()
    {
        return $this->belongsToMany('App\Hospital');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    protected $table='treatments';

    public function hospitals()
    {
        return $this->belongsToMany('App\Hospital');
    }
}

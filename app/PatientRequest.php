<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientRequest extends Model
{
    public function normaluser()
    {
        return $this->belongsTo('App\NormalUser');
    }
}

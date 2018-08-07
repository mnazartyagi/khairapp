<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TreatmentPlans extends Model
{
    public function normaluser()
    {
        return $this->belongsTo('App\NormalUser');
    }
}

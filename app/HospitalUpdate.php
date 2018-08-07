<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HospitalUpdate extends Model
{
    protected $fillable=['hospital_id','hospital_email','filename','update'];

    public function hospital()
    {
        return $this->belongsTo('App\Hospital');
    }
}

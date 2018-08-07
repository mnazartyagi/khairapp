<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HospitalTreatment extends Model
{
    protected $table='hospital_treatment';

    protected $fillable=['treatment_id','hospital_id'];
}

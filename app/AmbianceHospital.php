<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AmbianceHospital extends Model
{
    protected $table='ambiance_hospital';

    protected $fillable=['ambiance_id','hospital_id'];
}

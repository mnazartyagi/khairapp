<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HospitalFileUpload extends Model
{
    protected $fillable=['hospital_id','hospital_email','filename','file',];

    public function hospital()
    {
        return $this->belongsTo('App\Hospital');
    }
}

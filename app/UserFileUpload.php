<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFileUpload extends Model
{
    protected $fillable=['normal_user_id','user_email','filename','file'];

    public function normaluser()
    {
        return $this->belongsTo('App\NormalUser');
    }
}

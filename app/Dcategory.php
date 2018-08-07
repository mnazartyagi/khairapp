<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dcategory extends Model
{
    public function diseases()
    {
        return $this->belongsToMany('App\Disease');
    }

    public function blogs()
    {
        return $this->belongsToMany('App\Blog');
    }

}

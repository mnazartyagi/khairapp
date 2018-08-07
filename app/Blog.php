<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function dcategories()
    {
        return $this->belongsToMany('App\Dcategory');
    }
}

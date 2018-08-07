<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DcategoryDisease extends Model
{
    protected $table='dcategory_disease';

    protected $fillable=['disease_id','dcategory_id'];
}

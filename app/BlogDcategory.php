<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogDcategory extends Model
{
    protected $table='blog_dcategory';

    protected $fillable=['blog_id','dcategory_id'];
}

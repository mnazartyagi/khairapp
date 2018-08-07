<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Package extends Model
{
    use SearchableTrait;

    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'packages.name_en' => 10,
            'packages.name_ar' => 10,
            'packages.ayur_details_en' => 8,
            'packages.ayur_details_ar' => 8,
            'packages.natur_details_en' => 8,
            'packages.natur_details_ar' => 8,
        ],
    ];
}

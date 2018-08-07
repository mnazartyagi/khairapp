<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Disease extends Model
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
                'diseases.name_en' => 10,
                'diseases.name_ar' => 10,
                'diseases.treat_proced_en' => 9,
                'diseases.treat_proced_ar' => 9,
                'diseases.ayur_presc_en' => 8,
                'diseases.ayur_presc_ar' => 8,
                'diseases.natur_proce_en' => 9,
                'diseases.natur_proce_ar' => 9,
                'dcategories.name_en' => 10,
                'dcategories.name_ar' => 10,
            ],

        'joins'=>[
            'dcategory_disease'=>['dcategory_disease.disease_id','diseases.id'],
            'dcategories'=>['dcategories.id','dcategory_disease.dcategory_id'],
        ],
    ];

    public function dcategories()
    {
        return $this->belongsToMany('App\Dcategory');
    }
}

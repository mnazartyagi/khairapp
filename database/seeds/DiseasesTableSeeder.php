<?php

use Illuminate\Database\Seeder;
use App\Disease;

class DiseasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //cardiology
        for ($i=1; $i <5 ; $i++) {     
        Disease::create([
            'name_en'=> 'Cardiology'.$i,
            'name_ar'=> 'Cardiology'.$i,
            'slug'=>'cardio'.$i,
            'ayur_presc_en'=>'hgahsfdhsagfd ahdf ayhdf ahd ahfd hads had had',
            'ayur_presc_ar'=>'hgahsfdhsagfd ahdf ayhdf ahd ahfd hads had had',
            'treat_proced_en'=>'jsgfsjy fjgfuws fdsa dsd s dfsj fdj fds',
            'treat_proced_ar'=>'jsgfsjy fjgfuws fdsa dsd s dfsj fdj fds',
            'stay_dur_en'=>'jsgfsjy fjgfuws fdsa dsd s dfsj fdj fds',
            'stay_dur_ar'=>'jsgfsjy fjgfuws fdsa dsd s dfsj fdj fds',
            'exp_outcome_en'=>'jsgfsjy fjgfuws fdsa dsd s dfsj fdj fds',
            'exp_outcome_ar'=>'jsgfsjy fjgfuws fdsa dsd s dfsj fdj fds',
            'cost'=>'$400-$600',
        ])->dcategories()->attach(1);
        }
        //Orthopedic
        for ($i=1; $i <5 ; $i++) {     
            Disease::create([
                'name_en'=> 'Orthopedic'.$i,
                'name_ar'=> 'Orthopedic'.$i,
                'slug'=>'Ortho'.$i,
                'ayur_presc_en'=>'hgahsfdhsagfd ahdf ayhdf ahd ahfd hads had had',
                'ayur_presc_ar'=>'hgahsfdhsagfd ahdf ayhdf ahd ahfd hads had had',
                'treat_proced_en'=>'jsgfsjy fjgfuws fdsa dsd s dfsj fdj fds',
                'treat_proced_ar'=>'jsgfsjy fjgfuws fdsa dsd s dfsj fdj fds',
                'stay_dur_en'=>'jsgfsjy fjgfuws fdsa dsd s dfsj fdj fds',
                'stay_dur_ar'=>'jsgfsjy fjgfuws fdsa dsd s dfsj fdj fds',
                'exp_outcome_en'=>'jsgfsjy fjgfuws fdsa dsd s dfsj fdj fds',
                'exp_outcome_ar'=>'jsgfsjy fjgfuws fdsa dsd s dfsj fdj fds',
                'cost'=>'$400-$600',
            ])->dcategories()->attach(2);
        }
        //Gastrology
        for ($i=1; $i <7 ; $i++) {     
            Disease::create([
                'name_en'=> 'Gastrology'.$i,
                'name_ar'=> 'Gastrology'.$i,
                'slug'=>'gastro'.$i,
                'ayur_presc_en'=>'hgahsfdhsagfd ahdf ayhdf ahd ahfd hads had had',
                'ayur_presc_ar'=>'hgahsfdhsagfd ahdf ayhdf ahd ahfd hads had had',
                'treat_proced_en'=>'jsgfsjy fjgfuws fdsa dsd s dfsj fdj fds',
                'treat_proced_ar'=>'jsgfsjy fjgfuws fdsa dsd s dfsj fdj fds',
                'stay_dur_en'=>'jsgfsjy fjgfuws fdsa dsd s dfsj fdj fds',
                'stay_dur_ar'=>'jsgfsjy fjgfuws fdsa dsd s dfsj fdj fds',
                'exp_outcome_en'=>'jsgfsjy fjgfuws fdsa dsd s dfsj fdj fds',
                'exp_outcome_ar'=>'jsgfsjy fjgfuws fdsa dsd s dfsj fdj fds',
                'cost'=>'$400-$600',
            ])->dcategories()->attach(3);
        }
        //Urology
        for ($i=1; $i <4 ; $i++) {     
            Disease::create([
                'name_en'=> 'Urology'.$i,
                'name_ar'=> 'Urology'.$i,
                'slug'=>'uro'.$i,
                'ayur_presc_en'=>'hgahsfdhsagfd ahdf ayhdf ahd ahfd hads had had',
                'ayur_presc_ar'=>'hgahsfdhsagfd ahdf ayhdf ahd ahfd hads had had',
                'treat_proced_en'=>'jsgfsjy fjgfuws fdsa dsd s dfsj fdj fds',
                'treat_proced_ar'=>'jsgfsjy fjgfuws fdsa dsd s dfsj fdj fds',
                'stay_dur_en'=>'jsgfsjy fjgfuws fdsa dsd s dfsj fdj fds',
                'stay_dur_ar'=>'jsgfsjy fjgfuws fdsa dsd s dfsj fdj fds',
                'exp_outcome_en'=>'jsgfsjy fjgfuws fdsa dsd s dfsj fdj fds',
                'exp_outcome_ar'=>'jsgfsjy fjgfuws fdsa dsd s dfsj fdj fds',
                'cost'=>'$400-$600',
            ])->dcategories()->attach(4);
        }
        //Pediatric
        for ($i=1; $i <5 ; $i++) {     
            Disease::create([
                'name_en'=> 'Pediatric'.$i,
                'name_ar'=> 'Pediatric'.$i,
                'slug'=>'pedia'.$i,
                'ayur_presc_en'=>'hgahsfdhsagfd ahdf ayhdf ahd ahfd hads had had',
                'ayur_presc_ar'=>'hgahsfdhsagfd ahdf ayhdf ahd ahfd hads had had',
                'treat_proced_en'=>'jsgfsjy fjgfuws fdsa dsd s dfsj fdj fds',
                'treat_proced_ar'=>'jsgfsjy fjgfuws fdsa dsd s dfsj fdj fds',
                'stay_dur_en'=>'jsgfsjy fjgfuws fdsa dsd s dfsj fdj fds',
                'stay_dur_ar'=>'jsgfsjy fjgfuws fdsa dsd s dfsj fdj fds',
                'exp_outcome_en'=>'jsgfsjy fjgfuws fdsa dsd s dfsj fdj fds',
                'exp_outcome_ar'=>'jsgfsjy fjgfuws fdsa dsd s dfsj fdj fds',
                'cost'=>'$400-$600',
            ])->dcategories()->attach(5);
        }
        //Hygene
        for ($i=1; $i <9 ; $i++) {     
            Disease::create([
                'name_en'=> 'Hygene'.$i,
                'name_ar'=> 'Hygene'.$i,
                'slug'=>'hyg'.$i,
                'ayur_presc_en'=>'hgahsfdhsagfd ahdf ayhdf ahd ahfd hads had had',
                'ayur_presc_ar'=>'hgahsfdhsagfd ahdf ayhdf ahd ahfd hads had had',
                'treat_proced_en'=>'jsgfsjy fjgfuws fdsa dsd s dfsj fdj fds',
                'treat_proced_ar'=>'jsgfsjy fjgfuws fdsa dsd s dfsj fdj fds',
                'stay_dur_en'=>'jsgfsjy fjgfuws fdsa dsd s dfsj fdj fds',
                'stay_dur_ar'=>'jsgfsjy fjgfuws fdsa dsd s dfsj fdj fds',
                'exp_outcome_en'=>'jsgfsjy fjgfuws fdsa dsd s dfsj fdj fds',
                'exp_outcome_ar'=>'jsgfsjy fjgfuws fdsa dsd s dfsj fdj fds',
                'cost'=>'$400-$600',
            ])->dcategories()->attach(6);
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Hospital;

class HospitalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        for ($i=1; $i <5 ; $i++) {     
            Hospital::create([
                'name_en'=> 'Hospitalayu'.$i,
                'name_ar'=> 'Hospitalayu'.$i,
                'slug'=>'hill'.$i,
                'location'=>'Abra Ka Dabra',
                'treatment_en'=>'Ayurveda',
                'treatment_ar'=>'Ayurveda',
                'ambiance_en'=>'Hill',
                'ambiance_ar'=>'Hill',
                'established'=>1995,
            ])->ambiances()->attach(1);
        }
        $hospital=Hospital::find(1);
        $hospital->treatments()->attach(1);

        for ($i=1; $i <9 ; $i++) {     
            Hospital::create([
                'name_en'=> 'Hospitalnatu'.$i,
                'name_ar'=> 'Hospitalnatu'.$i,
                'slug'=>'coastal'.$i,
                'location'=>'Abra Ka Dabra',
                'treatment_en'=>'Naturopathy',
                'treatment_ar'=>'Naturopathy',
                'ambiance_en'=>'Coastal',
                'ambiance_ar'=>'Coastal',
                'established'=>1996,
            ])->ambiances()->attach(2);
        }

        for ($i=1; $i <9 ; $i++) {     
            Hospital::create([
                'name_en'=> 'Hospitalnatu'.$i,
                'name_ar'=> 'Hospitalnatu'.$i,
                'slug'=>'tropical'.$i,
                'location'=>'Abra Ka Dabra',
                'treatment_en'=>'Naturopathy',
                'treatment_ar'=>'Naturopathy',
                'ambiance_en'=>'Tropical',
                'ambiance_ar'=>'Coastal',
                'established'=>1996,
            ])->ambiances()->attach(3);
        }

        for ($i=1; $i <12 ; $i++) {     
            Hospital::create([
                'name_en'=> 'Hospitalnatu'.$i,
                'name_ar'=> 'Hospitalnatu'.$i,
                'slug'=>'beach'.$i,
                'location'=>'Abra Ka Dabra',
                'treatment_en'=>'Naturopathy',
                'treatment_ar'=>'Naturopathy',
                'ambiance_en'=>'Beach',
                'ambiance_ar'=>'Coastal',
                'established'=>1996,
            ])->ambiances()->attach(4);
        }

        for ($i=1; $i <4; $i++) {     
            Hospital::create([
                'name_en'=> 'Hospitalnatu'.$i,
                'name_ar'=> 'Hospitalnatu'.$i,
                'slug'=>'island'.$i,
                'location'=>'Abra Ka Dabra',
                'treatment_en'=>'Naturopathy',
                'treatment_ar'=>'Naturopathy',
                'ambiance_en'=>'Island',
                'ambiance_ar'=>'Coastal',
                'established'=>1996,
            ])->ambiances()->attach(5);
        }

        for ($i=1; $i <4; $i++) {     
            Hospital::create([
                'name_en'=> 'Hospitalnatu'.$i,
                'name_ar'=> 'Hospitalnatu'.$i,
                'slug'=>'rainf'.$i,
                'location'=>'Abra Ka Dabra',
                'treatment_en'=>'Naturopathy',
                'treatment_ar'=>'Naturopathy',
                'ambiance_en'=>'Rain Forest',
                'ambiance_ar'=>'Coastal',
                'established'=>1996,
            ])->ambiances()->attach(6);
        }

        for ($i=1; $i <5 ; $i++) {     
            Hospital::create([
                'name_en'=> 'Hospitalnatu'.$i,
                'name_ar'=> 'Hospitalnatu'.$i,
                'slug'=>'huspayur'.$i,
                'location'=>'Abra Ka Dabra',
                'treatment_en'=>'Ayurveda',
                'treatment_ar'=>'Naturopathy',
                'ambiance_en'=>'Coastal',
                'ambiance_ar'=>'Coastal',
                'established'=>1996,
            ])->treatments()->attach(1);
        }

        for ($i=1; $i <8 ; $i++) {     
            Hospital::create([
                'name_en'=> 'Hospitalnatu'.$i,
                'name_ar'=> 'Hospitalnatu'.$i,
                'slug'=>'huspanar'.$i,
                'location'=>'Abra Ka Dabra',
                'treatment_en'=>'Naturopathy',
                'treatment_ar'=>'Naturopathy',
                'ambiance_en'=>'Coastal',
                'ambiance_ar'=>'Coastal',
                'established'=>1996,
            ])->treatments()->attach(2);
        }
    }
}

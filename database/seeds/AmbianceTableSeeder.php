<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;
use App\Ambiance;

class AmbianceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now= Carbon::now()->toDateTimeString();

        Ambiance::insert([
            ['name_en'=>'Hill','name_ar'=>'Hill','slug'=>'hill','created_at'=>$now,'updated_at'=>$now],
            ['name_en'=>'Coastal','name_ar'=>'Coastal','slug'=>'coast','created_at'=>$now,'updated_at'=>$now],
            ['name_en'=>'Tropical','name_ar'=>'Cardiology','slug'=>'trop','created_at'=>$now,'updated_at'=>$now],
            ['name_en'=>'Beach','name_ar'=>'Cardiology','slug'=>'beach','created_at'=>$now,'updated_at'=>$now],
            ['name_en'=>'Island','name_ar'=>'Cardiology','slug'=>'isl','created_at'=>$now,'updated_at'=>$now],
            ['name_en'=>'Rain Forest','name_ar'=>'Cardiology','slug'=>'rainfor','created_at'=>$now,'updated_at'=>$now],
        ]);
    }
}

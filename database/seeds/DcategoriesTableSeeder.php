<?php

use Illuminate\Database\Seeder;
use App\Dcategory;
use Carbon\Carbon;

class DcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now= Carbon::now()->toDateTimeString();

        Dcategory::insert([
            ['name_en'=>'Cardiology','name_ar'=>'Cardiology','slug'=>'cardio','created_at'=>$now,'updated_at'=>$now],
            ['name_en'=>'Orthopedic','name_ar'=>'Cardiology','slug'=>'orthop','created_at'=>$now,'updated_at'=>$now],
            ['name_en'=>'Gastrology','name_ar'=>'Cardiology','slug'=>'gastro','created_at'=>$now,'updated_at'=>$now],
            ['name_en'=>'Urology','name_ar'=>'Cardiology','slug'=>'uro','created_at'=>$now,'updated_at'=>$now],
            ['name_en'=>'Pediatric','name_ar'=>'Cardiology','slug'=>'pedia','created_at'=>$now,'updated_at'=>$now],
            ['name_en'=>'Hygene','name_ar'=>'Cardiology','slug'=>'hyg','created_at'=>$now,'updated_at'=>$now],
        ]);
    }
}

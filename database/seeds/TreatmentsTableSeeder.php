<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Treatment;

class TreatmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now= Carbon::now()->toDateTimeString();

        Treatment::insert([
            ['name_en'=>'Ayurveda','name_ar'=>'Hill','slug'=>'ayur','created_at'=>$now,'updated_at'=>$now],
            ['name_en'=>'Naturopathy','name_ar'=>'Coastal','slug'=>'naturo','created_at'=>$now,'updated_at'=>$now],
        ]);
    }
}

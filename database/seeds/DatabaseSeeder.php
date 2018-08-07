<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DcategoriesTableSeeder::class);
        $this->call(DiseasesTableSeeder::class);
        $this->call(AmbianceTableSeeder::class);
        $this->call(TreatmentsTableSeeder::class);
        $this->call(HospitalsTableSeeder::class);
        $this->call(BlogsTableSeeder::class);
    }
}

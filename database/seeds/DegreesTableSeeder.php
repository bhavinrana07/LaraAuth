<?php

use App\Degree;
use Illuminate\Database\Seeder;

class DegreesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Degree::truncate();
        Degree::create(['name'=>'MCA']);
        Degree::create(['name'=>'MBA']);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Semester;
use App\Degree;
use App\Role;

class SemestersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Semester::truncate();
        DB::table('degree_semester')->truncate();
       
        //MBA DEGREE SEMESTERS
        $MBADegree = Degree::where('name', 'MBA')->first();

        $MBASemI = Semester::create(['name' => 'MBA SEM I']);
        $MBASemII = Semester::create(['name' => 'MBA SEM II']);
        $MBASemIII = Semester::create(['name' => 'MBA SEM III']);

        $MBADegree->semesters()->attach($MBASemI);
        $MBADegree->semesters()->attach($MBASemII);
        $MBADegree->semesters()->attach($MBASemIII);

        //MCA DEGREE SEMESTERS
        $MCADegree = Degree::where('name', 'MCA')->first();

        $MCASemI = Semester::create(['name' => 'MCA SEM I']);
        $MCASemII = Semester::create(['name' => 'MCA SEM II']);

        $MCADegree->semesters()->attach($MCASemI);
        $MCADegree->semesters()->attach($MCASemII);
        
    }
}

<?php

use App\Semester;
use App\Subject;
use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::truncate();
        DB::table('semester_subject')->truncate();

        //MBA SEMESTERS SUBJECTS
        $MBASemI = Semester::where('name', 'MBA SEM I')->first();
        $MBASemII = Semester::where('name', 'MBA SEM II')->first();

        $SubjectA = Subject::create(['name' => 'Marketing Management(MBA SEM I)']);
        $SubjectB = Subject::create(['name' => 'Business Communication(MBA SEM I)']);
        $SubjectC = Subject::create(['name' => 'Research Methodology for Management(MBA SEM II)']);

        $MBASemI->subjects()->attach($SubjectA);
        $MBASemI->subjects()->attach($SubjectB);
        $MBASemII->subjects()->attach($SubjectC);

        //MCA SEMESTERS SUBJECTS
        
        $MCASemI = Semester::where('name', 'MCA SEM I')->first();
        $MCASemII = Semester::where('name', 'MCA SEM II')->first();

        $SubjectX = Subject::create(['name' => 'Programming Fundamentals(MCA SEM I)']);
        $SubjectY = Subject::create(['name' => 'Mathematical Foundation(MCA SEM I)']);
        $SubjectZ = Subject::create(['name' => 'InfoSystems Analysis Design & Implementations(MCA SEM II)']);

        $MCASemI->subjects()->attach($SubjectX);
        $MCASemI->subjects()->attach($SubjectY);
        $MCASemII->subjects()->attach($SubjectZ);
       
    }
}

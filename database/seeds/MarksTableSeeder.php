<?php

use App\Mark;
use App\Subject;
use App\User;
use Illuminate\Database\Seeder;

class MarksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mark::truncate();


        //MBA SEMESTERS SUBJECTS
        $subjectA = Subject::where('name', 'Marketing Management(MBA SEM I)')->first();

        $userBhavin = User::where('name', 'Bhavin Rana')->first();
        $userAzul = User::where('name', 'Dzul Fakhri')->first();

        Mark::create(['marks' => rand(1, 100), 'user_id' => $userBhavin->id, 'subject_id' => $subjectA->id]);
        Mark::create(['marks' => rand(1, 100), 'user_id' => $userAzul->id, 'subject_id' => $subjectA->id]);
       
        $subjectB = Subject::where('name', 'Business Communication(MBA SEM I)')->first();

        Mark::create(['marks' => rand(1, 100), 'user_id' => $userBhavin->id, 'subject_id' => $subjectB->id]);
        Mark::create(['marks' => rand(1, 100), 'user_id' => $userAzul->id, 'subject_id' => $subjectB->id]);

        $subjectC = Subject::where('name', 'Programming Fundamentals(MCA SEM I)')->first();

        Mark::create(['marks' => rand(1, 100), 'user_id' => $userBhavin->id, 'subject_id' => $subjectC->id]);
        Mark::create(['marks' => rand(1, 100), 'user_id' => $userAzul->id, 'subject_id' => $subjectC->id]);
       
    }
}

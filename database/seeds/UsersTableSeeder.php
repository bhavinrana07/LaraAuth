<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $studentRole = Role::where('name', 'student')->first();

        $admin = User::create(['name' => 'Admin User', 'email' => 'admin@admin.com', 'password' => Hash::make('p@ssword')]);
        $student1 = User::create(['name' => 'Bhavin Rana', 'email' => 'bhavin@bhavinrana.com', 'password' => Hash::make('pro@dev')]);
        $student2 = User::create(['name' => 'Dzul Fakhri', 'email' => 'dzul.fakhri@contentcreation.com.my', 'password' => Hash::make('world@wide')]);

        $admin->roles()->attach($adminRole);
        $student1->roles()->attach($studentRole);
        $student2->roles()->attach($studentRole);
        
    }
}

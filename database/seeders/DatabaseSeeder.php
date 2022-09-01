<?php

namespace Database\Seeders;

use App\Models\Grade;
use App\Models\Notice;
use App\Models\Role;
use App\Models\User;
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
//        $this->call( CreateRolesSeeder::class );
//        \App\Models\User::factory(1000)->create();
//        Notice::factory(20)->create();
//          $this->call(SectionSeeder::class);
//        $this->call(SubjectSeeder::class);
//            $this->call(GradeSeeder::class);

        //Run to add grades to students
//        foreach (User::whereRoleId(Role::IS_STUDENT)->get() as $user){
//            $grade = Grade::inRandomOrder()->take(1)->pluck('grade_number');
//            $user->grades()->attach($grade);
//        }
    }


}

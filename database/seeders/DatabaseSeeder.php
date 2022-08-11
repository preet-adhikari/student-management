<?php

namespace Database\Seeders;

use App\Models\Notice;
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
        $this->call(SubjectSeeder::class);
            $this->call(GradeSeeder::class);
    }

}

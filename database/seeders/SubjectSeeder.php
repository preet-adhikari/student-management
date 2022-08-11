<?php

namespace Database\Seeders;

use App\Models\Grade;
use App\Models\Subject;
use Database\Factories\SubjectFactory;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::on()->truncate();
        Subject::factory(10)->create();

    }
}

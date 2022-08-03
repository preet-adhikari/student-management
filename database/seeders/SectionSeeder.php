<?php

namespace Database\Seeders;

use App\Models\Grade;
use App\Models\Section;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Truncate table before seeding
        Section::on()->truncate();
        $sections = [
            'A',
            'B',
            'C',
            'D',
            'E',
            'F'
        ];

        //Create the sections
        $i = 1;
        while ($i <= 10){
            foreach ($sections as $section)
            {
                Section::create([
                    'section_name' => $section,
                    'grade_id' => $i
                ]);
            }
            $i++;
        }


    }
}

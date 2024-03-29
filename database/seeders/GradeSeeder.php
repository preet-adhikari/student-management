<?php

namespace Database\Seeders;

use App\Models\Grade;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Truncate before seeding
        Grade::on()->truncate();
        $data = [
            ['One' , 1 , rand(30 , 40)],
            ['Two' , 2 , rand(30 , 40)],
            ['Three' , 3 , rand(30 , 40)],
            ['Four' , 4 , rand(30 , 40)],
            ['Five' , 5 , rand(30 , 40)],
            ['Six' , 6 , rand(30 , 40)],
            ['Seven' , 7 , rand(30 , 40)],
            ['Eight' , 8 , rand(30 , 40)],
            ['Nine' , 9 , rand(30 , 40)],
            ['Ten' , 10 , rand(30 , 40)],
        ];

        $num = 0;
        foreach ($data as $d)
        {
               Grade::create([
                  'name' => $d[0],
                  'grade_number' => $d[1],
                   'size' => $d[2],
               ]);
        }

        //Attaching subjects to grade
        foreach (Grade::all() as $grade)
        {
            $subjects = Subject::inRandomOrder()->take(rand(1,3))->pluck('id');
            $grade->subjects()->attach($subjects);
        }
    }
}

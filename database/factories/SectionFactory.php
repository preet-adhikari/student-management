<?php

namespace Database\Factories;

use App\Models\Grade;
use Illuminate\Database\Eloquent\Factories\Factory;

class SectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $sections = [
            'A',
            'B',
            'C'
        ];

        foreach ($sections as $section){
            return [
                'section_name' => $this->faker->randomLetter,
                //Get random id from Grade table
                'grade_id' => Grade::all()->random()->id
            ];
        }

    }
}

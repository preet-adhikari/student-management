<?php

namespace Database\Factories;

use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NoticeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'user_id' => Role::IS_ADMIN,
            'title' => ucfirst($this->faker->sentence(5)),
            'date_time' => Carbon::now(),
            'body' => $this->faker->paragraph(),
        ];
    }
}

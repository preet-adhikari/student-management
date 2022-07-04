<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $designations = [
            'Admin',
            'Principal',
            'Teacher',
            'Student'
        ];

        //Create designations
        foreach ($designations as $designation){
            Role::create([
                'designation' => $designation
            ]);
        }


    }
}

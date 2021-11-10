<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User
        $userData = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ]
        ];
        DB::table('users')->insert($userData);

        // Employee
        $this->call(EmployeeSeeder::class);

        // Position
        $positionData = [
            [
                'description' => "Administrator",
            ],
            [
                'description' => "General Manager",
            ],
            [
                'description' => "Marketing Manager",
            ],
            [
                'description' => "Product Manager",
            ],
            [
                'description' => "Project Manager",
            ],
		];
        DB::table('positions')->insert($positionData);

        // Department
        $departmentData = [
            [
                'description' => "Human Resources",
            ],
            [
                'description' => "Marketing",
            ],
            [
                'description' => "Research and Development",
            ],
		];
        DB::table('departments')->insert($departmentData);
    }
}

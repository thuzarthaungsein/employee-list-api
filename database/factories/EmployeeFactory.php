<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'employee_number' => 'E'.rand(1000, 9999),
        'first_name' => $faker->name,
        'last_name' => $faker->name,
        'gender' => rand(0, 1),
        'email' => $faker->unique()->safeEmail,
        'hire_date' => '11-11-2021',
        'address' => $faker->sentence(5, true),
        'salary' => '2000000',
        'position_id' => rand(1, 5),
        'department_id' => rand(1, 3),
        'record_status' => 1,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});

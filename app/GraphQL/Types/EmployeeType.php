<?php

namespace App\GraphQL\Types;

use App\Employee;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class EmployeeType extends GraphQLType {
    protected $attributes = [
        'name' => 'Employee',
        'description' => 'Employee info',
        'model' => Employee::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Id of employee',
            ],
            'employee_number' => [
                'type' => Type::string(),
                'description' => 'Employee number of employee',
            ],
            'first_name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'First name of employee',
            ],
            'last_name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Last name of employee',
            ],
            'gender' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Gender of employee',
            ],
            'email' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Email of employee',
            ],
            'phone_number' => [
                'type' => Type::string(),
                'description' => 'Phone Number of employee',
            ],
            'address' => [
                'type' => Type::string(),
                'description' => 'Address of employee',
            ],
            'hire_date' => [
                'type' => Type::string(),
                'description' => 'Date on which this employee was hired',
            ],
            'salary' => [
                'type' => Type::int(),
                'description' => 'Salary of employee',
            ],
            'position_id' => [
                'type' => Type::int(),
                'description' => 'Position of employee',
            ],
            'department_id' => [
                'type' => Type::int(),
                'description' => 'Department of employee',
            ],
            'record_status' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Whether active of inactive employee',
            ],
        ];
    }
}
<?php

namespace App\graphql\Mutations;

use App\Employee;
use Rebing\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;

class CreateEmployeeMutation extends Mutation
{
    protected $attributes = [
        'name' => 'createEmployee'
    ];

    public function type(): Type
    {
        return GraphQL::type('Employee');
    }

    public function args(): array
    {
        return [
            'employee_number' => [
                'name' => 'employee_number',
                'type' =>  Type::string(),
            ],
            'first_name' => [
                'name' => 'first_name',
                'type' => Type::nonNull(Type::string()),
            ],
            'last_name' => [
                'name' => 'last_name',
                'type' => Type::nonNull(Type::string()),
            ],
            'gender' => [
                'name' => 'gender',
                'type' => Type::nonNull(Type::int()),
            ],
            'email' => [
                'name' => 'email',
                'type' => Type::nonNull(Type::string()),
            ],
            'phone_number' => [
                'name' => 'phone_number',
                'type' => Type::string(),
            ],
            'address' => [
                'name' => 'address',
                'type' => Type::string(),
            ],
            'hire_date' => [
                'name' => 'hire_date',
                'type' => Type::string(),
            ],
            'salary' => [
                'name' => 'salary',
                'type' => Type::int(),
            ],
            'position_id' => [
                'name' => 'position_id',
                'type' => Type::int(),
            ],
            'department_id' => [
                'name' => 'department_id',
                'type' => Type::int(),
            ],
            'record_status' => [
                'name' => 'record_status',
                'type' => Type::nonNull(Type::int()),
            ],
        ];
    }

    public function resolve($root, $args)
    {
        $employee = new Employee();
        $employee->fill($args);
        $employee->save();

        return $employee;
    }
}
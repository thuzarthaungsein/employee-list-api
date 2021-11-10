<?php

namespace App\GraphQL\Queries;

use App\Employee;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class EmployeeQuery extends Query
{
    protected $attributes = [
        'name' => 'employee',
    ];

    public function type(): Type
    {
        return GraphQL::type('Employee');
    }

    public function args(): array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::int(),
                'rules' => ['required']
            ],
        ];
    }

    public function resolve($root, $args)
    {
        // if control delete action with record_status, check record_status = 1

        // if permanently delete
        return Employee::findOrFail($args['id']);
    }
}
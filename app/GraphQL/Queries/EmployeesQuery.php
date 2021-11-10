<?php

namespace App\graphql\Queries;

use App\Employee;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class EmployeesQuery extends Query
{
    protected $attributes = [
        'name' => 'employees',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('Employee'));
    }

    public function resolve($root, $args)
    {
        // if control delete action with record_status, check record_status
        
        // delete permanently
        return Employee::all();
    }
}
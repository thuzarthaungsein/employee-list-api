<?php

namespace App\graphql\Mutations;

use App\Employee;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;

class DeleteEmployeeMutation extends Mutation
{
    protected $attributes = [
        'name' => 'deleteEmployee',
        'description' => 'Delete an Employee'
    ];

    public function type(): Type
    {
        return Type::boolean();
    }

    public function args(): array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::int(),
                'rules' => ['required']
            ]
        ];
    }

    public function resolve($root, $args)
    {
        $employee = Employee::findOrFail($args['id']);
        
        // when permanently delete
        return  $employee->delete() ? true : false;

        // control with record_status field and remains transaction history
        // $employee->record_status = 0;
        // $employee->save();
        // return true;
    }
}
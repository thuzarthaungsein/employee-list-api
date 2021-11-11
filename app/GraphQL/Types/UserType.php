<?php

namespace App\GraphQL\Types;

use App\User;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class UserType extends GraphQLType {
    protected $attributes = [
        'name' => 'User',
        'description' => 'User info',
        'model' => User::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Id of user',
            ],
            'name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Name of the user',
            ],
            'email' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Email of user',
            ],
            'token' => [
                'type' => Type::string(),
                'description' => 'Token',
            ],
        ];
    }
}
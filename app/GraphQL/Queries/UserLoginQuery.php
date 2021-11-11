<?php

namespace App\GraphQL\Queries;

use App\User;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class UserLoginQuery extends Query
{
    protected $attributes = [
        'name' => 'login',
    ];

    public function type(): Type
    {
        return GraphQL::type('User');
    }

    public function args(): array
    {
        return [
            'email' => [
                'name' => 'email',
                'type' => Type::nonNull(Type::string()),
                'rules' => ['required']
            ],
            'password' => [
                'name' => 'password',
                'type' => Type::nonNull(Type::string()),
                'rules' => ['required']
            ],
        ];
    }

    public function resolve($root, $args, $context)
    {
        $user = User::where('email', $args['email'])->first();
        if ($user && Hash::check($args['password'], $user->password)) {
            $user['token'] = $user->createToken('Employee List')->accessToken;
            return $user;
        }
        throw new Exception('Login Error');
        return null;
    }
}
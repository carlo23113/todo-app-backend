<?php

namespace App\Services;

use App\Models\User;
use App\GraphQL\Types\Success;
use App\GraphQL\Types\Error;

class UserService
{
    public function create($args): object
    {
        $user = User::where('email', $args['email'])->first();
        if ($user) {
            return new Error(['message' => 'Email already exists: ' . $args['email'],]);
        } else {
            User::create([
                'email' => $args['email'],
                'username' => $args['username'],
                'password' => bcrypt($args['password'])
            ]);

            return new Success(["message" => "Registered Successfully."]);
        }
    }
}

<?php

namespace App\GraphQL\Mutations;
use App\Services\UserService;

final class UserMutator
{
    protected $userService;

    public function __construct()
    {
        $this->userService = new UserService();
    }
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        return $this->userService->create($args);
    }
}

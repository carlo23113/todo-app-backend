<?php

namespace App\GraphQL\Mutations;

use App\Services\TaskService;

final class TaskMutator
{
    protected $taskService;

    public function __construct()
    {
        $this->taskService = new TaskService();
    }
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        return $this->taskService->create($args);
    }

    public function update($_, array $args) {
        return $this->taskService->update($args);
    }
}

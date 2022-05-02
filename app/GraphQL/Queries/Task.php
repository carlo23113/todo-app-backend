<?php

namespace App\GraphQL\Queries;

use App\Services\TaskService;

final class Task
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
        return $this->taskService->fetchTasks($args);
    }
}

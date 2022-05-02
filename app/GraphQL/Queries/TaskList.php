<?php

namespace App\GraphQL\Queries;

use App\Services\TaskListService;

final class TaskList
{
    private $taskListService;

    public function __construct()
    {
        $this->taskListService = new TaskListService();
    }
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        return $this->taskListService->fetchTaskLists($args);
    }
}

<?php

namespace App\GraphQL\Mutations;
use App\Services\TaskListService;

final class TaskListMutator
{
    protected $taskListService;

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
        return $this->taskListService->create($args);
    }
}

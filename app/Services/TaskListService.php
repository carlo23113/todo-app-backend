<?php

namespace App\Services;

use App\Models\TaskList;
use App\GraphQL\Types\Success;

class TaskListService
{
    public function fetchTaskLists(array $args)
    {
        $task_lists = TaskList::where('user_id', $args['user_id'])->get();
        return $task_lists;
    }

    public function create(array $args)
    {
        TaskList::create([
            'user_id' => $args['user_id'],
            'name' => $args['name'],
        ]);

        return new Success(["message" => "List created successfully."]);
    }
}

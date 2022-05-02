<?php

namespace App\Services;

use App\Models\Task;
use App\GraphQL\Types\Success;

class TaskService
{
    public function fetchTasks(array $args)
    {
        $task_lists = Task::where('task_list_id', $args['task_list_id']);
        return $task_lists;
    }

    public function create(array $args)
    {
        Task::create([
            'task_list_id' => $args['task_list_id'],
            'description' => $args['description'],
        ]);

        return new Success(["message" => "Task created successfully."]);
    }

    public function update(array $args)
    {
        Task::find($args['task_id'])
            ->update(['task_list_id' => $args['task_list_id']]);

        return new Success(["message" => "Task updated successfully."]);
    }
}

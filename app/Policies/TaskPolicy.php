<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Task;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy
{
    use HandlesAuthorization;

    public function delete(User $user, Task $task)
    {
        return $user->id === $task->user_id;
    }

    public function edit(User $user, Task $task)
    {
        return ($user->id === $list->user_id || CategoryShare::where('user_id', $user->id)->where('category_id', $list->id)->first() !== null)
    }
}

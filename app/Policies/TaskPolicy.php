<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\Task;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class TaskPolicy
{
    public function view(User $user, Task $task): Response
    {
        return $this->canAccess($user, $task);
    }

    public function update(User $user, Task $task): Response
    {
        return $this->canAccess($user, $task);
    }

    public function delete(User $user, Task $task): Response
    {
        return $this->canAccess($user, $task);
    }

    private function canAccess(User $user, Task $task): Response
    {
        return $user->id === $task->user_id
            ? Response::allow()
            : Response::denyWithStatus(403);
    }
}

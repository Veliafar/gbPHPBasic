<?php

include_once 'Task.php';
class TaskService
{
    static function addComment(User $user, Task $task, string $text): void {
        $comment = new Comment($user, $task, $text);
        $user->addComment($comment);
        $task->addComment($comment);
    }

    static function addTask(User $user, string $description, ?int $priority): void {
        $task = new TaskLesson5($user, $description, $priority);
        $user->addTask($task);
    }
}
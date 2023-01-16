<?php
require_once "Task.php";

class TaskProvider
{
  private array $tasks;

  public function __construct()
  {
    $this->tasks = $_SESSION['tasks'] ?? [];
  }

  public function getTasks(): array
  {
    return $this->tasks;
  }

  public function addTask($task): void
  {
    $_SESSION['tasks'][] = $task;
    $this->tasks[] = $task;
  }

  public function delTask(int $taskKey): void
  {
    unset($_SESSION['tasks'][$taskKey]);
    unset($this->tasks[$taskKey]);
  }

  public function doneTask(int $taskKey): void
  {
    $_SESSION['tasks'][$taskKey]->markAsDone();
    $this->tasks[$taskKey]->markAsDone();
  }

  public function continueTask(int $taskKey): void
  {
    $_SESSION['tasks'][$taskKey]->markAsUndone();
    $this->tasks[$taskKey]->markAsUndone();
  }

}
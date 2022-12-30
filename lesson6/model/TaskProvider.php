<?php
require_once "Task.php";

class TaskProvider
{
  private array $tasks = [];

  public function addTask($description): void
  {
    $task = new Task($description);
    $this->tasks[] = $task;
    $_SESSION['tasks'] = $this->tasks;
    strtok($_SERVER["REQUEST_URI"], '?');
    header("Location: /?controller=tasks");
    die();
  }

  public function setTasks(array $tasks): void
  {
    $this->tasks = $tasks;
  }

  public function getTasks(): array
  {
    return $this->tasks;
  }

  public function delTask(int $taskKey): void
  {
    unset($this->tasks[$taskKey]);
    $_SESSION['tasks'] = $this->tasks;
    strtok($_SERVER["REQUEST_URI"], '?');
    header("Location: /?controller=tasks");
    die();
  }

  public function doneTask(int $taskKey): void
  {
    $this->tasks[$taskKey]->markAsDone();
    $_SESSION['tasks'] = $this->tasks;
    strtok($_SERVER["REQUEST_URI"], '?');
    header("Location: /?controller=tasks");
    die();
  }

  public function continueTask(int $taskKey): void
  {
    $this->tasks[$taskKey]->markAsUndone();
    $_SESSION['tasks'] = $this->tasks;
    strtok($_SERVER["REQUEST_URI"], '?');
    header("Location: /?controller=tasks");
    die();
  }

}
<?php
require_once "Task.php";

class TaskProvider
{
  private PDO $pdo;
  private array $tasks;

  private int $userID;

  public function __construct(PDO $pdo, int $userID)
  {
    $this->pdo = $pdo;
    $this->userID = $userID;

    $statement = $this->pdo->prepare(
      'SELECT * FROM tasks WHERE userID = :userID'
    );

    $statement->execute([
      'userID' => $userID,
    ]);

    $tasksFromDB = $statement->fetchAll(PDO::FETCH_OBJ);
    foreach ($tasksFromDB as $taskDB) {
      $this->tasks[] = new Task(
        $taskDB->description,
        $taskDB->userID,
        $taskDB->isDone,
        $taskDB->dateCreate,
        $taskDB->dateUpdate,
        $taskDB->id
      );
    }
    if (!count($tasksFromDB)) {
      $this->tasks = [];
    }
  }

  public function getTasks(): array
  {
    return $this->tasks;
  }

  public function addTask(Task $task): void
  {
    $statement = $this->pdo->prepare(
      'INSERT INTO tasks (
                    description, isDone, dateCreate, dateUpdate, userID
                   ) VALUES (
                              :description, :isDone, :dateCreate, :dateUpdate, :userID
                             )'
    );

    $statement->execute([
      'description' => $task->description,
      'isDone' => (int)$task->getIsDone(),
      'dateCreate' => $task->getDateCreate(),
      'dateUpdate' => $task->getDateUpdate(),
      'userID' => $this->userID,
    ]);

    $this->tasks[] = new Task(
      $task->description,
      $task->getUserID(),
      $task->getIsDone(),
      $task->getDateCreate(),
      $task->getDateUpdate(),
      $this->pdo->lastInsertId()
    );
  }

  public function delTask(int $taskKey): void
  {
    $taskID = $this->tasks[$taskKey]->getID();

    $statement = $this->pdo->prepare(
      'DELETE FROM tasks WHERE id = :id AND userID = :userID'
    );
    $statement->execute([
      'id' => $taskID,
      'userID' => $this->userID
    ]);

    $deleteKey = null;
    foreach($this->tasks as $key=>$value) {
      if ($value->getUserID() === $this->userID && $value->getID() === $taskID) {
        $deleteKey = $key;
      }
    }
    unset($this->tasks[$deleteKey]);
  }

  public function changeTaskDone(int $taskKey, int $isDone): void
  {
    $taskID = $this->tasks[$taskKey]->getID();
    $statement = $this->pdo->prepare(
      'UPDATE tasks SET isDone=:isDone WHERE id = :id AND userID = :userID'
    );
    $statement->execute([
      'isDone' => $isDone,
      'id' => $taskID,
      'userID' => $this->userID
    ]);
    $makeDoneKey = null;
    foreach($this->tasks as $key=>$value) {
      if ($value->getUserID() === $this->userID && $value->getID() === $taskID) {
        $makeDoneKey = $key;
      }
    }
    $this->tasks[$makeDoneKey]->changeTaskReady($isDone);
  }

}
<?php
require_once "model/User.php";
require_once "model/Task.php";
require_once "model/TaskProvider.php";
session_start();

//echo "<pre>";
//print_r($_REQUEST);
//print_r($_SESSION);
//echo "</pre>";

include_once "controller/SharedController.php";
$pageHeader = 'Задачи';
$pageTitle = $pageHeader . " | " . $commonPageTitle;

include_once "controller/LoginController.php";

$tasks = [];
$taskProvider = new TaskProvider();


if (isset($_POST['description'])) {
  $task = new Task($_POST['description']);
  $taskProvider->addTask($task);
  strtok($_SERVER["REQUEST_URI"], '?');
  header("Location: /?controller=tasks");
  die();
}

if (isset($_GET['delTask'])) {
  $taskProvider->delTask($_GET['delTask']);
  strtok($_SERVER["REQUEST_URI"], '?');
  header("Location: /?controller=tasks");
  die();
}

if (isset($_GET['doneTask'])) {
  $taskProvider->doneTask($_GET['doneTask']);
  strtok($_SERVER["REQUEST_URI"], '?');
  header("Location: /?controller=tasks");
  die();
}

if (isset($_GET['continueTask'])) {
  $taskProvider->continueTask($_GET['continueTask']);
  strtok($_SERVER["REQUEST_URI"], '?');
  header("Location: /?controller=tasks");
  die();
}

$tasks = $taskProvider->getTasks();

include "view/tasks.php";
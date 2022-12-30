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

$taskProvider = new TaskProvider();

if (isset($_SESSION['tasks'])) {
  $taskProvider->setTasks($_SESSION['tasks']);
}

if (isset($_POST['description'])) {
  $taskProvider->addTask($_POST['description']);
}

if (isset($_GET['delTask'])) {
  $taskProvider->delTask($_GET['delTask']);
}

if (isset($_GET['doneTask'])) {
  $taskProvider->doneTask($_GET['doneTask']);
}

if (isset($_GET['continueTask'])) {
  $taskProvider->continueTask($_GET['continueTask']);
}

$tasks = $taskProvider->getTasks();

include "view/tasks.php";
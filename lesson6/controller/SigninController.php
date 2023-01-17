<?php
require_once 'model/User.php';
require_once 'model/UserProvider.php';

session_start();
$pdo = require "db.php";
include_once "controller/SharedController.php";
$pageHeader = 'Регистрация';
$pageTitle = $pageHeader . " | " . $commonPageTitle;


if (isset($_POST['username'], $_POST['password'], $_POST['name'])) {
  ['name' => $name, 'username' => $userName, 'password' => $userPass] = $_POST;
  $userProvider = new UserProvider($pdo);
  $user = new User($userName);
  $user->setName($name);
  $userProvider->registerUser($user, $userPass);
  $user->setID($pdo->lastInsertId());

  $_SESSION['username'] = $user;
  header("Location: index.php");
  die();
}

include "view/signin.php";
<?php
require_once 'model/User.php';
require_once 'model/UserProvider.php';

session_start();

include_once "controller/SharedController.php";
$pageHeader = 'Вход в систему';
$pageTitle = $pageHeader . " | " . $commonPageTitle;

$error = null;


if (isset($_POST['username'], $_POST['password'])) {

    ['username' => $userName, 'password' => $userPass] = $_POST;
    $userProvider = new UserProvider();
    $user = $userProvider->getUserByNameAndPass($userName, $userPass);

    if ($user === null) {
        $error = 'Пользователь с указанными данными не существует';
    } else {
        $_SESSION['username'] = $user;
        header("Location: index.php");
        die();
    }
}

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    unset($_SESSION['username']);
    session_destroy();
    header('Location: /');
    die();
}

include "view/auth.php";
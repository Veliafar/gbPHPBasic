<?php

$userName = null;
if (isset($_SESSION['username'])) {
    $user = $_SESSION['username'];
    $userName = $user->getUserName();
}

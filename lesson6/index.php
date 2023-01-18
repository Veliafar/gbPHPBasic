

<?php
$controller = $_GET['controller'] ?? 'index';

$routes = require 'router.php';

include_once $routes[$controller] ?? die('404');






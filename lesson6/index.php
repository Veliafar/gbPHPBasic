<style>
    @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap');
</style>

<?php
$controller = $_GET['controller'] ?? 'index';

$routes = require 'router.php';

include_once $routes[$controller] ?? die('404');






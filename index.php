<?php

define('CLASS_DIR', 'src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
define('APP', __DIR__ . 'app' . DIRECTORY_SEPARATOR);

$controller = isset($_GET['controller']) ? $_GET['controller'] : "Home";
$action = isset($_GET['action']) ? $_GET['action'] : "index";

$router = new Flip\Listing\Router($controller, $action);
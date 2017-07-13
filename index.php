<?php

define('CLASS_DIR', 'src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
define('APP', __DIR__ . '/src/app' . DIRECTORY_SEPARATOR);

$router = new Bramus\Router\Router();
require_once (APP . 'routes/web.php');
$router->run();
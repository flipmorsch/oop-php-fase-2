<?php

define('CLASS_DIR', 'src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
define('APP', __DIR__ . '/src/app' . DIRECTORY_SEPARATOR);

$db = new PicoDb\Database(['driver' => 'sqlite', 'filename' => APP . 'db/clients.sql3']);

$query = $db->table('clients')->findAll();

var_dump($query);

$router = new Bramus\Router\Router();
require_once (APP . 'routes/web.php');
$router->run();
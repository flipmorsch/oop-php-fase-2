<?php

define('CLASS_DIR', 'src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

$x = new Flip\Listing\Clients\ClientFisico;

$db = new DB\TxtDB([
    'dir'   =>  'db/',
    'extension' =>  'txtdb',
    'encrypt'   =>  'false',
]);

if (isset($_GET['page']) and file_exists('views/'.$_GET['page'].'.php'))
{
    require_once ('views/'.$_GET['page'].'.php');
}
else
{
    require_once ('views/home.php');
}
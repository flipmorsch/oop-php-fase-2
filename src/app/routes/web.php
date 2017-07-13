<?php

use App\Controllers\HomeController;
use App\Controllers\ClientController;

$router->get('/', function(){
    $controller = new HomeController();
    $controller->index();
});

$router->get('/client/add', function (){
    $controller = new ClientController();
    $controller->addForm();
});
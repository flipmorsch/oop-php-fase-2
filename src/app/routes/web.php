<?php

$router->get('/', function(){
    echo 'Hello World';
});

$router->get('/home/(\w+)', function ($id){
    echo 'Hello ' . htmlentities($id);
});
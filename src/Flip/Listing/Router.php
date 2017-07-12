<?php

namespace Flip\Listing;

class Router
{

    public function __construct($controller = NULL, $action = NULL)
    {

        if (isset($controller) and isset($action))
        {
            $namespace = '\App\Controllers\\'. $controller . 'Controller';
            $class = new $namespace;
            $class->$action();
        }
        elseif (isset($controller) and !isset($action))
        {
            $namespace = '\App\Controllers\\'. $controller . 'Controller';
            $class = new $namespace;
            $class->index();
        }
        else
        {
            $class = new \App\Controllers\HomeController;
            $class->index();
        }
    }

}


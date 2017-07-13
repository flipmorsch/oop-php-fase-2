<?php

namespace App\Classes;

class Utils
{

    public function view($view)
    {
        require_once (APP . 'views/' . $view . '.php');
    }

}
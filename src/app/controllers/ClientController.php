<?php

namespace App\Controllers;

use App\Classes\Utils;

class ClientController
{


    public function addForm()
    {
        $utils = new Utils();
        $utils->view('home');
    }

    public function add()
    {

    }

}
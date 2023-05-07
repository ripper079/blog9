<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //Access modifier may be different
    public function index()
    {
        echo "Hello from Controller Users";
    }

    //passing parameters
    public function displaystringnumber($anumber)
    {
        echo 'Nummer ' . $anumber;
    }


    //Or even as an API controller
    public function personinfo()
    {
        return ['fornamn' => 'Daniel', 'alder' => '43'];
    }

    //Or even as an API controller
    public function mangapersonersinfo()
    {
        $people = [
            ['fornamn' => 'Daniel', 'alder' => '43'],
            ['fornamn' => 'Sara', 'alder' => '27'],
            ['fornamn' => 'Erik', 'alder' => '35']
        ];
    
        return $people;
    }


}

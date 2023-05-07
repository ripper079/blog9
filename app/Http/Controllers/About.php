<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class About extends Controller
{
    //
    public function myname()
    {
        echo "Hello from Daniel";        
    }

    //Returns a view
    public function loadsecretView()
    {
        return view('secret');
    }
}

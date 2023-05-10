<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountrybladeController extends Controller
{
    //
    function viewLoad()
    {
        //No passing data
        //return view('countryblade');

        //Pass Sport as argument
        return view('countryblade', ['Sport' => 'Fotball']);
    }

    function viewCountryNames()
    {
        return view('countries', ['countrieslist' => ['Sweden', 'Finland', 'Germany', 'Thailand', 'Badcountry']]);
    }
}

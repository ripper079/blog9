<?php

use Illuminate\Support\Facades\Route;

//Must import the controller
use App\Http\Controllers\Users;
use App\Http\Controllers\About;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Provides mapping page to an url

//Default routing
Route::get('/', function () {
    return view('welcome');
});


Route::get('/hej', function () {
    return view('hello');
});


Route::get('/kompis', function () {
    return view('user');    //must correspond the filename without suffic .blade.php
});

//There is a shortcut for this, parameter one is the route (in this case omoss) and parameter two is th pagename (in this case about))
Route::view('omoss', 'about');

//Pass data 
Route::get('/kontakt/{namn}', function($namn){
    //Print direct
    echo $namn;
    //also pass to view
    return view('contact', ['passedname' =>$namn]);
});

//Redirection
Route::get('/startsida', function(){
    //Remeber it is the ROUTE is redirects to
    return redirect("omoss");
});

//CONTROLLER CONTROLLER CONTROLLERS
// Route::get("path", "controller file")
//In larawell 7 (and previous version) the following syntax, param1=route and param2=controllername@functiontoinvoke
//PS. Capitilization matters
//Route::get("boss", "Users@index");
//route and controllername::class and method in that controller
Route::get("boss", [Users::class, 'index']);
//Passing argument to method-> route/{parameternameincontrollerfunction} and [<contollername>::class, 'methodtoinvoke']
Route::get("lekamednummer/{anumber}", [Users::class, 'displaystringnumber']);

Route::get('/hemligt', function () {
    return view('secret');    //must correspond the filename without suffic .blade.php
});

Route::get("hemligt", [About::class, 'loadsecretView']);


//Simulate an API call
Route::get("apiperson", [Users::class, 'personinfo']);
Route::get("apipersoner", [Users::class, 'mangapersonersinfo']);
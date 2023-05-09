<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});





Route::get('listone', [PersonController::class, 'listone']);
Route::get('listall', [PersonController::class, 'listall']);


//Add rambo - Post route to a controller
Route::post('addrambo', [PersonController::class, 'addrambohero']);

//Add a fake person - Post 
Route::post('addfake/user/{idofperson}', [PersonController::class, 'addperson']);

//Add a new person - Post
Route::post('add/user/', [PersonController::class, 'addpersonjson']);

//Delete a person
Route::delete('remove/user/{idofperson}', [PersonController::class, 'removeperson']);

//Modify the person, maybe a prospect for PUT verb...
Route::patch('edit/user/{idpersontomodify}', [PersonController::class, 'modifyperson']);
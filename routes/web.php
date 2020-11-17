<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\allUserController;
use App\Http\Controllers\viewController;
use App\Http\Controllers\bladeController;
use App\Http\Controllers\datapatchController;
use App\Http\Controllers\modelDataController;
use App\Http\Controllers\saveController;
use App\Http\Controllers\deleteController;
use App\Http\Controllers\userController;
use App\Http\Controllers\httpController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
// Route::get('about',function(){
//     return view('about');
// });
// Route::get('about/{name}', function ($name) {
//     return view('about',['name'=>$name]);
// });
// Route::view("about","about");
Route::get('all-users',[allUserController::class,'index']);
Route::get('about/{user}',[viewController::class,'userView']);
ROute::get('blade',[bladeController::class,'blade']);
Route::get('data',[datapatchController::class,'index']);
Route::get('model',[modelDataController::class,'getData']);
Route::view('save','save');
Route::post('save',[saveController::class,'saveData']);
Route::get('data',[deleteController::class,'showData']);
Route::get('delete/{id}',[deleteController::class,'deleteData']);
Route::get('update/{id}',[deleteController::class,'updateData']);
Route::post('updateSuccess',[deleteController::class,'updateSuccess']);
// Route::view('infoUpdate','update');


//--------------------------------CRUD Operation for user Table--------------------------------
Route::view('insert','insert');
Route::post('insert',[userController::class,'insert']);
Route::get('read',[userController::class,'read']);
Route::get('dlt/{id}',[userController::class,'delete']);
Route::get('edit/{id}',[userController::class,'edit']);
Route::post('edit',[userController::class,'editSuccess']);

//----------------------------------------HTTP Clients----------------------------------------
Route::get('http',[httpController::class,'index']);
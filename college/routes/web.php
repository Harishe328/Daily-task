<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});
   
Route::get('/login',function(){
    return view("login");
});

Route::post('/register',[StudentController::class,"registration"])->name("register");
Route::get('/register',function(){
    return view("register");
});

Route::post('/display',[StudentController::class,"login"]);
Route::get('/about',function(){
    return view("aboutus");
});
Route::get('/show',function(){
    return view("show");
});

Route::get('/showAll',[StudentController::class,"showAll"]);
Route::get('/teacher',[StudentController::class,"teacher"]);
Route::get('/deactive',[StudentController::class,"deactive"]);
Route::get('/retrive/{email}',[StudentController::class,"retrive"]);
Route::get('/signout',[StudentController::class,"signout"]);
Route::get('/filter/{role}',[StudentController::class,"filter"]);
Route::get('/editshow/{email}',[StudentController::class,"edit"]);
Route::put('/edit/{email}',[StudentController::class,'editsubmit']);
Route::get('/delete/{email}',function($email){
    return view("delete")->with('email',$email);
});
Route::put('/del',[StudentController::class,'delet']);
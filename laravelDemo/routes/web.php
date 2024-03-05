<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\StudentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';

// Route::get('/about',[AboutController::class,"index"]);

Route::get('/',[StudentController::class,"index"]);
Route::post('/student/register',[StudentController::class,"registration"])->name("register");
Route::post('/',[StudentController::class,"login"]);
Route::get("/show",function(){
    return view("pages.register");
})->name("regis");
Route::get("/showall",[StudentController::class,"showAll"])->name("pages.showall");
Route::get("/update/{id}",[StudentController::class,"edit"]);
Route::put('/update/{id}',[StudentController::class,"editsubmit"]);
Route::get('/showpage',function(){
    return view("pages.show");
});
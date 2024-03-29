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

Route::get('/login', function () {
    return view("login");
});

Route::post('/register', [StudentController::class, "registration"])->name("register");
Route::get('/register', [StudentController::class, "department_option"]);


Route::post('/display', [StudentController::class, "login"]);
Route::get('/about', function () {
    return view("aboutus");
});
Route::get('/show', function () {
    return view("show");
});

Route::get('/showAll', [StudentController::class, "showAll"]);
Route::get('/adding',[StudentController::class, "department_option"]);
Route::get('/teacher', [StudentController::class, "teacher"]);
Route::get('/deactive', [StudentController::class, "deactive"]);
Route::get('/retrive/{email}', [StudentController::class, "retrive"]);
Route::get('/signout', [StudentController::class, "signout"]);
Route::get('/filter/{role}', [StudentController::class, "filter"]);
Route::get('/editshow/{email}', [StudentController::class, "edit"]);
Route::put('/edit/{email}', [StudentController::class, 'editsubmit']);
Route::get('/del/{email}',[StudentController::class, 'delet'] );

Route::get('/department', [StudentController::class, 'department']);
Route::get('/d_adding', function () {
    return view("d_add");
});
Route::post('/d_add', [StudentController::class, 'add_department'])->name('d_add');
Route::get('/delete_dept/{department}', [StudentController::class, 'delete_dept']);

<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

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


// Route::get('student/create',[StudentController::class, 'create']);
// Route::get('students', [StudentController::class, 'index']);
// Route::post('students', [StudentController::class, 'store']);
// Route::get('students/{id}',[StudentController::class, 'show']);
// Route::get('students/{id}/edit',[StudentController::class, 'edit']);
// Route::put('students/{id}',[StudentController::class, 'update']);
// Route::delete('student/{id}',[StudentController::class, 'destroy']);

Route::resource('students', StudentController::class);
Route::resource('teachers', TeacherController::class);


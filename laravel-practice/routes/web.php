<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Usercontroller;
//use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/user', [Usercontroller::class, 'index']);

Route::post('/upload', [Usercontroller::class, 'uploadAvatar']);




Route::get('/student',[StudentController::class, 'studentView']);
Route::post('/saveS', [StudentController::class, 'studentUpdate']);
Route::get('/showT', [StudentController::class, 'showTeachers']);

Route::get('/teacher',[TeacherController::class, 'teacherView']);
Route::post('/saveT', [TeacherController::class, 'teacherUpdate']);
Route::get('/showS', [TeacherController::class, 'showStudents']);
Route::get('/deletes', [TeacherController::class, 'destroy']);
Route::get('/restore', [TeacherController::class, 'restore']);


Route::get('/employee', [EmployeeController::class, 'employeeView']);
Route::get('/employee_call', [EmployeeController::class, 'success']);
Route::get('/showEmployees', [EmployeeController::class, 'show']);
Route::get('/avgCall', [EmployeeController::class, 'showAvgCall']);





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

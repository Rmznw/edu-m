<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\AuthController;






Route::get('/', function () {
    return view('auth.register');
});


Route::get('/register',[AuthController::class,'showRegister'])->name('show.register');
Route::get('/login',[AuthController::class,'showLogin'])->name('show.login');
Route::post('/register',[AuthController::class,'register'])->name('register');
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
Route::resource('students',StudentController::class);
Route::resource('teachers',TeacherController::class);
Route::resource('courses',CourseController::class);
Route::resource('batches',BatchController::class);
Route::resource('enrollments',EnrollmentController::class);
Route::resource('categories',CategoryController::class);
Route::resource('payments',PaymentController::class);






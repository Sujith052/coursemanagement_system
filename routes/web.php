<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EnrollmentController;


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

Route::get('/', function () {return view('welcome');})->name('home');
Route::get('/index', [HomeController::class, 'index'])->name('admin.index');
Route::get('/categories', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories-details', [CategoryController::class, 'index'])->name('categories.view');
Route::get('/courses', [CourseController::class, 'create'])->name('courses.create');
Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');
Route::get('/courses-details', [CourseController::class, 'view'])->name('courses.view');
Route::get('/students', [StudentController::class, 'create'])->name('students.create');
Route::post('/students', [StudentController::class, 'store'])->name('students.store');
Route::get('/students-details', [StudentController::class, 'index'])->name('students.index');
Route::get('/enrollments', [EnrollmentController::class, 'create'])->name('enrollments.create');
Route::post('/enrollments', [EnrollmentController::class, 'store'])->name('enrollments.store');
Route::get('/course-enrollments', [CourseController::class, 'index'])->name('courses.index');
Route::get('/enrollments/by-course', [EnrollmentController::class, 'showByCourse'])->name('enrollments.byCourse');
Route::get('/course-filter', [CourseController::class, 'courseFilter'])->name('courses.filter');


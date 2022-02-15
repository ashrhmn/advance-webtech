<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PhotosController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact-us');
Route::get('/login', [HomeController::class, 'login'])->name('login');

Route::get('/admin-dashboard', [DashboardController::class, 'admin'])->name('admin-dashboard');
Route::get('/student-dashboard', [DashboardController::class, 'student'])->name('student-dashboard');

Route::get('/course/{id}/{name}/{instructor}/{duration}', [HomeController::class, 'getCourse'])->name('course.details');

// Route::get('/test', function () {
//     return view('test');
// });


// Route::get("/student/create", [StudentController::class, 'create']);
// Route::get("/student", [StudentController::class, 'get']);
// Route::get("/student/edit", [StudentController::class, 'edit']);

// Route::resource('photos', PhotosController::class);

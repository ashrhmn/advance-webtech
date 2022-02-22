<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
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

Route::get("/students", [StudentController::class, 'index']);

Route::get("/dashboard", [DashboardController::class, 'index'])->name('dashboard');

Route::get("/login", [AuthController::class, 'login'])->name('loginPage');
Route::post("/login", [AuthController::class, 'loginSubmit'])->name('loginSubmit');
Route::get("/registration", [AuthController::class, 'registration'])->name('regPage');
Route::post("/registration", [AuthController::class, 'registrationSubmit'])->name('regSubmit');


Route::get("/logout", [AuthController::class, 'logout'])->name('logout');

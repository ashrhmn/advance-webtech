<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('home.index');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/login', [PagesController::class, 'login'])->name("login");

Route::get("/student/create", [StudentController::class, 'create']);
Route::post("/student/submit", [StudentController::class, 'submit']);
Route::get("/student", [StudentController::class, 'get']);
Route::get("/student/edit", [StudentController::class, 'edit']);
Route::get("/student/getOne/{id}", [StudentController::class, 'getOne']);

Route::resource('photos', PhotosController::class);

Route::post('/login', [PagesController::class, 'submitLogin'])->name("login");


Route::get('/product', [ProductController::class, 'get'])->name("getProducts");
Route::get('/product/getOne/{id}', [ProductController::class, 'getOne'])->name("getOneProduct");
Route::get('/product/create', [ProductController::class, 'create'])->name("createProduct");
Route::post('/product/submitCreate', [ProductController::class, 'submitCreate'])->name("submitCreateProduct");
Route::get('/product/test', [ProductController::class, 'test']);

Route::get('/course/getOne/{id}', [CourseController::class, 'getOne'])->name('getOneCourse');

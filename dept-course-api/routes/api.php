<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/courses', [CourseController::class, 'getAll']);
Route::get('/courses/{id}', [CourseController::class, 'getOne']);
Route::post('/courses', [CourseController::class, 'addOne']);
Route::put('/courses/', [CourseController::class, 'updateOne']);
Route::delete('/courses/{id}', [CourseController::class, 'deleteOne']);

Route::get('/departments', [DepartmentController::class, 'getAll']);
Route::get('/departments/{id}', [DepartmentController::class, 'getOne']);
Route::post('/departments', [DepartmentController::class, 'addOne']);
Route::put('/departments/', [DepartmentController::class, 'updateOne']);
Route::delete('/departments/{id}', [DepartmentController::class, 'deleteOne']);

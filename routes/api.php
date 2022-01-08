<?php

use App\Http\Controllers\API\HomeController;
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

Route::name('api.')->group(function () {
    Route::get('/categories', [HomeController::class, 'getCategories'])->name('categories');
    Route::middleware('auth:sanctum')->group(function () {
        Route::get('/courses', [HomeController::class, 'getCourses'])->name('courses');
    });
});

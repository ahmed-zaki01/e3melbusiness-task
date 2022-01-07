<?php

use App\Http\Controllers\Dashboard\AuthController;
use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;


Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::namespace('Auth')->group(function () {
        // login routes
        Route::get('/login', [AuthController::class, 'login'])->name('login');
        Route::post('/attempt', [AuthController::class, 'attempt'])->name('attempt');
    });

    Route::middleware('user_auth')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('index');

        // profile routes
        Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
        Route::put('/update-profile', [DashboardController::class, 'updateProfile'])->name('update-profile');

        //logout
        Route::get('/logout', 'DashboardController@logout')->name('logout');

        // categories resource
        Route::resource('categories', 'CategoryController');

        // courses resource
        Route::resource('courses', 'CourseController');

    });
});

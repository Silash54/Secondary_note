<?php

use App\Http\Controllers\admin\CourseController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\LevelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
Route::resource('level',LevelController::class)->names('level');
Route::resource('course',CourseController::class)->names('course');
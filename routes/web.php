<?php

use App\Http\Controllers\admin\CourseController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\LevelController;
use App\Http\Controllers\front\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageController::class,'home'])->name('home');
Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
Route::resource('level',LevelController::class)->names('level');
Route::resource('course',CourseController::class)->names('course');
Route::get('front/course/{id}',[PageController::class,'course_detail'])->name('course_detail');
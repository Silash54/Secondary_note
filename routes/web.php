<?php

use App\Http\Controllers\admin\CourseController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\LevelController;
use App\Http\Controllers\admin\TeamController;
use App\Http\Controllers\admin\UnitController;
use App\Http\Controllers\front\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageController::class,'home'])->name('home');
Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
Route::resource('admin/level',LevelController::class)->names('level');
Route::resource('admin/course',CourseController::class)->names('course');
Route::resource('admin/team',TeamController::class)->names('teams');
Route::resource('admin/unit',UnitController::class)->names('unit');

Route::get('front/course/{id}',[PageController::class,'course_detail'])->name('course_detail');
Route::get('front/syllabus/{id}',[PageController::class,'course_syllabus'])->name('course_syllabus');

Route::get('front/note',[PageController::class,'note'])->name('note.index');
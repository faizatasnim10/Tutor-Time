<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
Route::get('/student/signup',[StudentController::class,'create'])->name('Student.create');
Route::post('/student/signup',[StudentController::class,'createSubmit'])->name('Student.create.submit');
Route::get('/student/login',[StudentController::class,'login'])->name('Student.Login');
Route::post('/student/login',[StudentController::class,'loginSubmit'])->name('Student.Login.submit');


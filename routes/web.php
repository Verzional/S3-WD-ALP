<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanionController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FormController::class, 'create']);
Route::resource('categories', CategoryController::class);
Route::resource('companions', CompanionController::class);
Route::resource('events', EventController::class);
Route::resource('forms', FormController::class);
Route::resource('registrations', RegistrationController::class);
Route::resource('schedules', ScheduleController::class);
Route::resource('schools', SchoolController::class);
Route::resource('students', StudentController::class);
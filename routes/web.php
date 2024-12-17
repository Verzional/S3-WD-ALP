<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;

Route::get('/', [DashboardController::class,'index']);

Route::get('/participants', [RegistrationController::class, 'index']);

Route::get('/detailParticipant/{registration_id}', [RegistrationController::class, 'detailRegistration']);

Route::get('/schools', [SchoolController::class, 'index']);

Route::get('/detailSchool/{school_id}', [SchoolController::class, 'detailSchool']);

Route::get('/users', [UserController::class,'index']);

Route::get('/detailUser/{user_id}', [UserController::class,'detailUser']);

Route::get('/events', [EventController::class,'index']);

Route::get('/detailEvent/{event_id}', [EventController::class,'detailEvent']);

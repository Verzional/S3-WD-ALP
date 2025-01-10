<?php

use App\Http\Middleware\RoleMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanionController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('index');
});

Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [FormController::class, 'create']);


Route::middleware([RoleMiddleware::class . ':companion'])->group(function () {
    Route::get('companion/dashboard', [DashboardController::class, 'companion']);
    Route::get('companion/user', [UserController::class, 'companionDetailUser']);
    Route::get('companion/editUser', [UserController::class, 'companionEditUser']);
    Route::get('companion/participants', [RegistrationController::class, 'companion']);
    Route::get('companion/detailParticipant/{registration_id}', [RegistrationController::class, 'detailCompanionRegistration']);
    Route::put('companion/updateUser', [UserController::class, 'updateCompanion']);
});

Route::middleware([RoleMiddleware::class . ':student'])->group(function () {
    Route::get('student/dashboard', [DashboardController::class, 'student']);
    Route::get('student/detailUser', [UserController::class, 'studentDetailUser']);
    Route::get('student/editUser', [UserController::class, 'studentEditUser']);
    Route::put('student/updateUser', [UserController::class, 'updateStudent']);
});

Route::middleware([RoleMiddleware::class . ':admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/detailUser/{user_id}', [UserController::class, 'detailUser']);
    Route::get('/student', [UserController::class, 'index']);
    Route::get('/companion', [UserController::class, 'teachers']);
    Route::get('/participants', [RegistrationController::class, 'index']);
    Route::get('/detailParticipant/{registration_id}', [RegistrationController::class, 'detailRegistration']);
    Route::get('/editParticipant/{registration_id}', [RegistrationController::class, 'editRegistration']);
    Route::put('/updateParticipant/{registration}', [RegistrationController::class, 'change'])->name('updateParticipant');
    Route::get('/schools', [SchoolController::class, 'index']);
    Route::get('/detailSchool/{school_id}', [SchoolController::class, 'detailSchool']);
    Route::get('/events', [EventController::class, 'index']);
    Route::get('/detailEvent/{event_id}', [EventController::class, 'detailEvent']);
    Route::get('/editEvent/{event_id}', [EventController::class, 'editEvent']);
    Route::put('/updateEvent', [EventController::class, 'update']);
});


Route::get('/export', [RegistrationController::class, 'exportCSV'])->name('export');

Route::resource('categories', CategoryController::class);
Route::resource('companions', CompanionController::class);
Route::resource('events', EventController::class);
Route::resource('forms', FormController::class);
Route::resource('registrations', RegistrationController::class);
Route::resource('schedules', ScheduleController::class);
Route::resource('schools', SchoolController::class);
Route::resource('students', StudentController::class);

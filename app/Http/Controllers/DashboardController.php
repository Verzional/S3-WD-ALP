<?php

namespace App\Http\Controllers;

use App\Charts\registrationsCategory;
use App\Charts\registrationsCategoryStudents;
use App\Charts\registrationsLanguage;
use App\Charts\registrationsLanguageCompanion;
use App\Models\Category;
use App\Models\Companion;
use App\Models\Event;
use App\Models\Schedule;
use App\Models\School;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Registration;

class DashboardController extends Controller
{
    public function index(registrationsCategory $chart, registrationsLanguage $chart2)
{
    $chart = $chart->build();
    $chart2 = $chart2->build();
    $participants = Registration::all()->count();
    $companions = Companion::all()->count();
    $schools = School::all()->count();
    $schedules = Schedule::all();

    return view('admin.AdminDashboard', [
        'title' => 'Dashboard',
        'chart' => $chart,
        'chart2'=> $chart2,
        'participants' => $participants,
        'companions'=> $companions,
        'schools'=> $schools,
        'schedules' => $schedules
    ]);
}

public function student()
{
    $user = User::find(session('user'));
    $registration =Registration::where('student_id', $user->account_id)->orderBy('created_at', 'desc')->first();
    $score = Registration::where('student_id' , $user->account_id)->orderBy('created_at', 'desc')->value('score');
    $rank = Registration::where('student_id' , $user->account_id)->orderBy('created_at', 'desc')->value('rankPercentile');
    $schedule= trim(Schedule::where('id', $registration->event_id)->orderBy('created_at', 'desc')->value('description'), "Jam ");
    $category = Category::where('id',$registration->category_id)->orderBy('created_at', 'desc')->value('name');
    $year = Event::where('id', $registration->event_id)->value('year');
    return view('student.StudentDashboard', [
        'title' => 'Dashboard',
        'score' => $score,
        'rank' => $rank,
        'schedule'=> $schedule,
        'registration'=> $registration,
        'category'=> $category,
        'year'=> $year
    ]);

}

public function companion(registrationsCategoryStudents $chart, registrationsLanguageCompanion $chart2)
{
    $chart = $chart->build();
    $chart2 = $chart2->build();
    $user = User::find(session('user'));
    $status = Companion::dataWithID($user->account_id);
    $school = $status->school->name;
    $registration =Registration::where('companion_id', $user->account_id)->orderBy('created_at', 'desc')->first();
    $year = Event::where('id', $registration->event_id)->value('year');
    $participants = Registration::where('companion_id', $user->account_id)->count();
    return view('companion.CompanionDashboard', [
        'title' => 'Dashboard',
        'chart' => $chart,
        'chart2'=> $chart2,
        'participants' => $participants,
        'year' => $year,
        'status' => $status->status,
        'school'=> $school

    ]);
}

}

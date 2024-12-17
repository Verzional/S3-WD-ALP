<?php

namespace App\Http\Controllers;

use App\Charts\registrationsCategory;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(registrationsCategory $chart)
{
    $chart = $chart->build();

    return view('AdminDashboard', [
        'title' => 'Dashboard',
        'chart' => $chart,
    ]);
}
}

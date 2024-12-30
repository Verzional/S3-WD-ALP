<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\DB;
use App\Models\User;


class registrationsCategoryStudents extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    } 
   
    public function build()
    {
        $user = User::find(session("user"));
        $data = DB::table('registrations')
            ->join('categories', 'registrations.category_id', '=', 'categories.id')
            ->select('categories.name as category_name', DB::raw('COUNT(registrations.id) as registration_count'))
            ->where('registrations.companion_id', $user->account_id)
            ->groupBy('categories.name')
            
            ->get();

        $categoryNames = $data->pluck('category_name')->toArray();
        $registrationCounts = $data->pluck('registration_count')->toArray();

        return $this->chart->barChart()
            ->setTitle('Registrations per Category')
            ->setSubtitle('Number of registrations grouped by category')
            ->addData('Registrations', $registrationCounts)
            ->setXAxis($categoryNames);
    }
}

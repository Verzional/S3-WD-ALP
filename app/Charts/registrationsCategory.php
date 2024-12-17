<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\DB;


class registrationsCategory extends Chart
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
        $data = DB::table('registrations')
            ->join('categories', 'registrations.category_id', '=', 'categories.id')
            ->select('categories.name as category_name', DB::raw('COUNT(registrations.id) as registration_count'))
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

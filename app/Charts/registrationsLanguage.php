<?php

namespace App\Charts;

use Illuminate\Support\Facades\DB;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class registrationsLanguage
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
            ->select('language', DB::raw('COUNT(id) as registration_count'))
            ->groupBy('language')
            ->get();

        $languages = $data->pluck('language')->toArray();
        $registrationCounts = $data->pluck('registration_count')->toArray();

        return $this->chart->pieChart()
            ->addData($registrationCounts)
            ->setLabels($languages);
    }
}

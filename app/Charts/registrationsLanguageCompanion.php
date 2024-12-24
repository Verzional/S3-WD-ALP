<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class registrationsLanguageCompanion extends Chart
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
            ->select('language', DB::raw('COUNT(id) as registration_count'))
            ->groupBy('language')
            ->where('registrations.companion_id', $user->account_id)
            ->get();

        $languages = $data->pluck('language')->toArray();
        $registrationCounts = $data->pluck('registration_count')->toArray();

        return $this->chart->pieChart()
            ->addData($registrationCounts)
            ->setLabels($languages);
    }
}

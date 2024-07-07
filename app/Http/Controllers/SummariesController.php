<?php

namespace App\Http\Controllers;

use App\Charts\DailyVisitsChart;
use App\Charts\VisitDeviceSourceChart;
use Inertia\Inertia;

class SummariesController
{
    public function index(DailyVisitsChart $dailyVisitsChart, VisitDeviceSourceChart $visitDeviceSourceChart)
    {
        return Inertia::render('Summaries', [
            'dailyVisitsChart' => $dailyVisitsChart->build(),
            'visitDeviceSourceChart' => $visitDeviceSourceChart->build(),
        ]);
    }

}

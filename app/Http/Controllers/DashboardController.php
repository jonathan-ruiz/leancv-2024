<?php

namespace App\Http\Controllers;

use App\Charts\DailyVisitsChart;
use App\Charts\VisitDeviceSourceChart;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index(DailyVisitsChart $dailyVisitsChart, VisitDeviceSourceChart $visitDeviceSourceChart)
    {
        return Inertia::render('Dashboard', [
            'dailyVisitsChart' => $dailyVisitsChart->build(),
            'visitDeviceSourceChart' => $visitDeviceSourceChart->build(),
        ]);
    }
}

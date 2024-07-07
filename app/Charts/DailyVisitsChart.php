<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class DailyVisitsChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): array
    {
        return $this->chart->lineChart()
            ->addData('Current week', [40, 93, 35, 42, 18, 82, 70])
            ->addData('Last Week', [70, 29, 77, 28, 55, 45, 90])
            ->setXAxis(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'])
            ->setStroke(2)
            ->toVue();
    }
}

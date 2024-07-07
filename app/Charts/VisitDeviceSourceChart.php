<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class VisitDeviceSourceChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): array
    {
       $donutChart = $this->chart->donutChart()
            ->addData([20, 24])
            ->setLabels(['Mobile', 'Desktop'])
            ->toVue();

       return array_merge_recursive($donutChart, [
           'options' => [
               'legend' => [
                   'show' => true,
                   'position' => 'bottom'
               ],
               'plotOptions' => [
                   'pie' => [
                       'donut' => [
                           'labels' => [
                               'show' => true,
                               'total' => [
                                   'show' => true,
                                   'label' => 'Total',
                               ]
                           ]
                       ]
                   ]
               ],
           ]
       ]);
    }
}

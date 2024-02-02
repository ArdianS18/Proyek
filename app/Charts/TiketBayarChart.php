<?php

namespace App\Charts;

use App\Models\Tiket;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class TiketBayarChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        $tiketData = Tiket::get();

        return $this->chart->donutChart()
            ->setTitle('Data Sudah / Belum Bayar Tiket')
            ->setSubtitle(date('Y'))
            ->setWidth(500)
            ->setHeight(500)
            ->addData([
                $tiketData->where('status', 'Sudah Bayar')->count(),
                $tiketData->where('status', 'Belum Bayar')->count(),
            ])
            ->setColors(['#557C55', '#F76E11'])
            ->setLabels(['Sudah Bayar' , 'Belum Bayar']);
    }
}

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

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        $tiketData = Tiket::get();
        // $data = [
        //     $tiketData->where('status', 'Sudah Bayar')->count(),
        //     $tiketData->where('status', 'Belum Bayar')->count(),
        // ];
        // $label = [
        //     'Sudah Bayar',
        //     'Belum Bayar',
        // ];

        return $this->chart->pieChart()
            ->setTitle('Data Sudah / Belum Bayar Tiket')
            ->setSubtitle(date('Y'))
            ->addData([
                $tiketData->where('status', 'Sudah Bayar')->count(),
                $tiketData->where('status', 'Belum Bayar')->count(),
            ])
            ->setLabels(['Sudah Bayar' , 'Belum Bayar']);
    }
}

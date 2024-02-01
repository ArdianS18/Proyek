<?php

namespace App\Charts;

use App\Models\Tiket;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class PenerimaanTiketChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $tiketData = Tiket::get();


        return $this->chart->barChart()
            ->setTitle('San Francisco vs Boston.')
            ->setSubtitle('Wins during season 2021.')
            ->addData('Pemesanan', [
                $tiketData->where('terima', 'Pemesanan')->count(),
            ])
            ->addData('Tidak Diterima', [
                $tiketData->where('terima', 'Tidak Diterima')->count(),
            ])
            ->addData('Diterima', [
                $tiketData->where('terima', 'Diterima')->count(),
            ])
            ->setXAxis(['Penerimaan']);
    }
}

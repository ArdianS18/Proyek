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
            ->setTitle('Status Pembayaran')
            ->setSubtitle(date('Y'))
            ->setWidth(500)
            ->addData('Sudah Bayar', [
                $tiketData->where('status', 'Sudah Bayar')->count(),
            ])
            ->addData('Belum Bayar', [
                $tiketData->where('status', 'Belum Bayar')->count(),
            ])
            ->setColors(['#ffc63b', '#ff6384'])
            ->setXAxis(['Status Pembayaran']);
    }
}

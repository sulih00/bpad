<?php

namespace App\Filament\Resources\YesResource\Widgets;

use Filament\Widgets\LineChartWidget;

class laravelChart extends LineChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {

        $data = Transaksi::model(laravel::class)
        ->between(
            start: now()->startOfYear(),
            end: now()->endOfYear(),
        )
        ->perMonth()
        ->count();
        return [
//
        ];
    }
}

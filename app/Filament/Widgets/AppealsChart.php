<?php

namespace App\Filament\Widgets;

use App\Models\Appeal;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class AppealsChart extends ChartWidget
{
    protected static ?string $heading = 'Total Appeals';

    protected function getData(): array
    {
        $appealsByMonth = Appeal::select(DB::raw('MONTH(created_at) as month'), DB::raw('count(*) as total_appeals'))
            ->groupBy('month')
            ->orderBy('month')
            ->get()->toArray();

        return [
            'datasets' => [
                [
                    'label' => 'Total Appeals Per Month',
                    'data' => array_column($appealsByMonth, 'total_appeals'),
                    'backgroundColor' => '#cb8108',
                ],
            ],
            'labels' => array_column($appealsByMonth, 'month'),
        ];

    }
    protected function getType(): string
    {
        return 'bar';
    }
}

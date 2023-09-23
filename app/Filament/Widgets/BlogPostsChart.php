<?php

namespace App\Filament\Widgets;

use App\Models\Blog;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class BlogPostsChart extends ChartWidget
{
    protected static ?string $heading = 'Total Blog Posts';

    protected function getData(): array
    {
        $postsByMonth = Blog::select(DB::raw('MONTH(created_at) as month'), DB::raw('count(*) as total_posts'))
            ->groupBy('month')
            ->orderBy('month')
            ->get()->toArray();

        return [
            'datasets' => [
                [
                    'label' => 'Blog Posts Per Month',
                    'data' => array_column($postsByMonth, 'total_posts'),
                    'backgroundColor' => '#cb8108',
                ],
            ],
            'labels' => array_column($postsByMonth, 'month'),
        ];

    }

    protected function getType(): string
    {
        return 'bar';
    }
}

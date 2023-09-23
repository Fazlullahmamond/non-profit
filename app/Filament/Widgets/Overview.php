<?php

namespace App\Filament\Widgets;

use App\Models\Appeal;
use App\Models\Blog;
use App\Models\Volunteer;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class Overview extends BaseWidget
{
    protected function getStats(): array
    {
        $appeals = Appeal::count();
        $today = now()->startOfDay();
        $appealsToday = Appeal::whereDate('created_at', $today)->count();
        $appeal_desc = "There are total of {$appealsToday} appeals saved today.";

        $blogs = Blog::count();
        $blogsToday = Blog::whereDate('created_at', $today)->count();
        $blog_desc = "There are total of {$blogsToday} blog posts today.";

        $volunteers = Volunteer::count();
        $volunteersToday = Volunteer::whereDate('created_at', $today)->count();
        $volunteer_desc = "There are total of {$volunteersToday} volunteers created today.";

        return [
            Stat::make('Total Appeals', $appeals)->chart([7, 2, 10, 3, 15, 4, 17])->description($appeal_desc)->descriptionIcon('heroicon-o-archive-box-arrow-down')->color('primary'),
            Stat::make('Total Blog Posts', $blogs)->chart([7, 2, 10, 3, 15, 4, 17])->description($blog_desc)->descriptionIcon('heroicon-o-newspaper')->color('success'),
            Stat::make('Total Volunteers', $volunteers)->chart([7, 2, 10, 3, 15, 4, 17])->description($volunteer_desc)->descriptionIcon('heroicon-o-users')->color('warning'),
        ];
    }
}

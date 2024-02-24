<?php

namespace App\Filament\Widgets;

use App\Models\Appeal;
use App\Models\Blog;
use App\Models\Community;
use App\Models\Event;
use App\Models\User;
use App\Models\Volunteer;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class Overview extends BaseWidget
{
    protected function getStats(): array
    {

        $users = User::count();
        $today = now()->startOfDay();
        $usersToday = User::whereDate('created_at', $today)->count();
        $user_desc = "There are total of {$usersToday} users saved today.";
        $userData = User::monthlyChartData();

        $appeals = Appeal::count();
        $today = now()->startOfDay();
        $appealsToday = Appeal::whereDate('created_at', $today)->count();
        $appeal_desc = "There are total of {$appealsToday} appeals saved today.";
        $appealData = Appeal::monthlyChartData();

        $blogs = Blog::count();
        $blogsToday = Blog::whereDate('created_at', $today)->count();
        $blog_desc = "There are total of {$blogsToday} blog posts today.";
        $blogData = Blog::monthlyChartData();

        $volunteers = Volunteer::count();
        $volunteersToday = Volunteer::whereDate('created_at', $today)->count();
        $volunteer_desc = "There are total of {$volunteersToday} volunteers created today.";
        $volunteerData = Volunteer::monthlyChartData();

        $events = Event::count();
        $eventsToday = Event::whereDate('created_at', $today)->count();
        $event_desc = "There are total of {$eventsToday} events created today.";
        $eventData = Event::monthlyChartData();

        $communities = Community::count();
        $communitiesToday = Community::whereDate('created_at', $today)->count();
        $community_desc = "There are total of {$communitiesToday} communities created today.";
        $communityData = Community::monthlyChartData();

        return [
            Stat::make('Total Users', $users)->chart($userData)->description($user_desc)->descriptionIcon('heroicon-o-users')->color('danger'),
            Stat::make('Total Events', $events)->chart($eventData)->description($event_desc)->descriptionIcon('heroicon-o-calendar-days')->color('secondary'),
            Stat::make('Total Communities', $communities)->chart($communityData)->description($community_desc)->descriptionIcon('heroicon-o-user-group')->color('warning'),
            Stat::make('Total Appeals', $appeals)->chart($appealData)->description($appeal_desc)->descriptionIcon('heroicon-o-archive-box-arrow-down')->color('primary'),
            Stat::make('Total Blog Posts', $blogs)->chart($blogData)->description($blog_desc)->descriptionIcon('heroicon-o-newspaper')->color('success'),
            Stat::make('Total Volunteers', $volunteers)->chart($volunteerData)->description($volunteer_desc)->descriptionIcon('heroicon-o-users')->color('warning'),
        ];
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'email', 'primary_number', 'secondary_number', 'dob', 'gender', 'address', 'description', 'interested_in', 'resume'];

    public function scopeMonthlyChartData($query)
    {
        return $query
            ->selectRaw('COUNT(*) as total, DATE_FORMAT(created_at, "%Y-%m") as month')
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('total', 'month')
            ->toArray();
    }
}

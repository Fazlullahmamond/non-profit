<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'image', 'status', 'last_name', 'email', 'primary_number', 'secondary_number', 'dob', 'gender', 'address', 'description', 'interested_in', 'resume'];

    public function scopeMonthlyChartData($query)
    {
        return $query
            ->selectRaw('COUNT(*) as total, DATE_FORMAT(created_at, "%Y-%m") as month')
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('total', 'month')
            ->toArray();
    }

    public static $rules = [
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email|unique:your_table_name,email',
        'primary_number' => 'required|string|max:20',
        'secondary_number' => 'nullable|string|max:20',
        'dob' => 'required|date',
        'gender' => 'required|string|max:10',
        'address' => 'required|string|max:255',
        'description' => 'required|string',
        'interested_in' => 'required|string|max:255',
        'resume' => 'nullable|string|max:255',
        'image' => 'nullable|image',
    ];
}

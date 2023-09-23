<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'email', 'primary_number', 'secondary_number', 'dob', 'gender', 'address', 'description', 'interested_in', 'resume'];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'date',
        'time_pickup',
        'day',
        'breakfast',
        'lunch',
        'dinner',
        'remarks',
        'program_id',
        'guide_id',
        'driver_id',
        'hotel_id',
        'cruise_id'
    ];
}

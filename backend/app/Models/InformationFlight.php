<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformationFlight extends Model
{
    use HasFactory;

    protected $fillable = [
        'route',
        'date_fligth',
        'day',
        'airline',
        'flight_number',
        'departure_time',
        'arrival_time',
        'add_day'
    ];

    public $timestamps = false;
}

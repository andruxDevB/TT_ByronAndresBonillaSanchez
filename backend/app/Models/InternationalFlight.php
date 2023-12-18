<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternationalFlight extends Model
{
    use HasFactory;

    protected $fillable = [
        'program_id',
        'information_flight_id'
    ];
}

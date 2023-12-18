<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DomesticFlight extends Model
{
    use HasFactory;

    protected $fillable = [
        'reserve_code',
        'program_id',
        'information_flight_id'
    ];
}

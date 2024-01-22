<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelEvaluation extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'program_id',
        'hotel_id',
        'score',
        'comments'
    ];
}

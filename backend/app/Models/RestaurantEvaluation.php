<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantEvaluation extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'program_id',
        'restaurant_id',
        'score',
        'comments'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'num_pax',
        'tour_year',
        'file_number',
        'country_tours',
        'sales_executive',
        'type_tour',
        'general_notes',
        'client_id',
    ];
}

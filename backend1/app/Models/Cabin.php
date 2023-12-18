<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabin extends Model
{
    use HasFactory;

    protected $fillable = [
        'cabin_name',
        'deck',
        'cruise_id'
    ];

    public $timestamps = false;
}

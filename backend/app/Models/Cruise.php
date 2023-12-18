<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cruise extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'sales_executive',
        'email',
        'phone',
        'active'
    ];

    public $timestamps = false;
}

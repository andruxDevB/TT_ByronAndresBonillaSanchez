<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuideDriverProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'id_card_number',
        'email'
    ];

    public $timestamps = false;
}

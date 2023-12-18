<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'first_name',
        'last_name',
        'phone',
        'dob',
        'country',
        'id_card_number',
        'nationality',
        'user_id'
    ];
    
}

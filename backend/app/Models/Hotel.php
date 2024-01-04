<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'country',
        'city',
        'category',
        'sales_executive',
        'email',
        'phone',
        'active',
    ];

    public $timestamps = false;

    public function rooms(): HasMany
    {
        return $this->hasMany(Room::class, 'hotel_id');
    }
}

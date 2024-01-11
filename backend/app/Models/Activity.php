<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Activity extends Model
{
    use HasFactory;

    protected $filable = [
        'name',
        'date',
        'time_pickup',
        'day',
        'breakfast',
        'lunch',
        'dinner',
        'remarks',
        'program_id',
        'guide_id',
        'driver_id',
        'hotel_id',
        'cruise_id'
    ];

    public function guide(): BelongsTo
    {
        return $this->belongsTo(Guide::class, "id");
    }

    public function driver(): BelongsTo
    {
        return $this->belongsTo(Driver::class, "id");
    }
}

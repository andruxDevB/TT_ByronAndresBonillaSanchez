<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InternationalFlight extends Model
{
    use HasFactory;

    protected $fillable = [
        'program_id',
        'information_flight_id'
    ];

    public function flight_information(): BelongsTo
    {
        return $this->belongsTo(InformationFlight::class, "information_flight_id");
    }
}

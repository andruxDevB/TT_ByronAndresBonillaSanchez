<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

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
        'client_id'
    ];

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function domestic_flights(): HasMany
    {
        return $this->hasMany(DomesticFlight::class, 'program_id');
    }

    public function international_flights(): HasMany
    {
        return $this->hasMany(InternationalFlight::class, 'program_id');
    }

    public function activities(): HasMany
    {
        return $this->hasMany(Activity::class, 'program_id');
    }
}

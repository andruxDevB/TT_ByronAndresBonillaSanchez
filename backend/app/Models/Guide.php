<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Guide extends Model
{
    use HasFactory;

    protected $fillable = [
        'languajes',
        'active',
        'guide_driver_profile_id',
    ];

    public function profile(): BelongsTo
    {
        return $this->belongsTo(GuideDriverProfile::class, 'guide_driver_profile_id');
    }
}

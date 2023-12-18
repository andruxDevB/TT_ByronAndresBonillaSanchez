<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

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

    public function guide(): BelongsTo
    {
        return $this->belongsTo(Guide::class,'guide_driver_profile_id');
    }
}

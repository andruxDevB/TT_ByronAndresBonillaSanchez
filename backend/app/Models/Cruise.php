<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function cabins(): HasMany
    {
        return $this->hasMany(Cabin::class, 'cruise_id');
    }
}

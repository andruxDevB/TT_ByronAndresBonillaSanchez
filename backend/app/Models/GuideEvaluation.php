<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuideEvaluation extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'program_id',
        'guide_id',
        'score',
        'comments'
    ];
}

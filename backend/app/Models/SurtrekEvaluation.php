<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurtrekEvaluation extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'program_id',
        'surtrek_question_id',
        'score',
        'comments'
    ];
}

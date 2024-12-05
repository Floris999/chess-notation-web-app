<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notation extends Model
{
    use HasFactory;

    protected $fillable = [
        'event',
        'date',
        'round',
        'board',
        'section',
        'opening',
        'white_player',
        'black_player',
        'white_moves',
        'black_moves',
        'result_white_won',
        'result_draw',
        'result_black_won',
        'white_signature',
        'black_signature',
    ];

    protected $casts = [
        'white_moves' => 'array',
        'black_moves' => 'array',
        'result_white_won' => 'boolean',
        'result_draw' => 'boolean',
        'result_black_won' => 'boolean',
    ];
}
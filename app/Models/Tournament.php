<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'full_name',
        'gender',
        'age',
        'country',
        'score_1',
        'score_2',
        'score_3',
    ];

    public $timestamps = true;
}

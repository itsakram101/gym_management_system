<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        '08_09',
        '09_10',
        '10_11',
        '11_12',
        '12_13',
        '13_14',
        '14_15',
        '15_16',
        '16_17',
        '17_18',
        '18_19'
    ];
}

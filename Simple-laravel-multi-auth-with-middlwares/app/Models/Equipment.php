<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;
    //link equipment to equipments table
    public $table = "equipments" ;

    protected $fillable = [
        'name', 'description', 'price'
    ];
}

<?php

namespace App\Http\Controllers\trainer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class trainerController extends Controller
{
    //


    public function getDashboard(){
        return view('trainersd.index');
    }
}

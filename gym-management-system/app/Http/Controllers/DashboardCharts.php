<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardCharts extends Controller
{
    public function index(){
        return view('DashboardCharts.index');
    }
}

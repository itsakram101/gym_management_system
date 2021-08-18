<?php

namespace App\Http\Controllers\member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Schedule;

class memberController extends Controller
{
    

    public function getDashboard(){
        $data = [
            'schedule' => $this->getSchedule()
        ];
        return view('membersd.index',$data);
    }
    // returns first result
    private function getSchedule(){
        return Schedule::first();
    }
}

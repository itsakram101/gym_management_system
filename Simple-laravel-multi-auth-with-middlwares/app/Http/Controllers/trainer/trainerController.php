<?php

namespace App\Http\Controllers\trainer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\schedule;
use App\Models\User;
use App\Models\Sport;
use Auth;
class trainerController extends Controller
{
    //


    public function getDashboard(){
        $data = [
            'schedule' => $this->getSchedule()
        ];
        return view('trainersd.index',$data);
    }

    private function getSchedule(){
        return Schedule::first();
    }

    public function getMembers(){
        
        $data = [
            'members' => User::where('role','USR')->get()
        ];
        return view('trainersd.members',$data);
    }

    public function getSports(){
        // Auth::user()->id gets object of user stored in session
        $data = [
            'sports' => Sport::where('trainer_id',Auth::user()->id)->get()
        ];
        return view('trainersd.sports',$data);
    }
}

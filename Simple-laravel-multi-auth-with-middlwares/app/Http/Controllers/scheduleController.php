<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\schedule;

class scheduleController extends Controller
{
    public function add(){
        $data = [
            'schedule' => $this->getSchedule()
        ];
        return view('admins.add-schedule',$data);
    }

    private function getSchedule(){
        return Schedule::first();
    }
    // request is an object that contains the method input
    public function store(Request $request){
        $data = [
            "08_09" => json_encode($request->input('08:09')),
            "09_10" => json_encode($request->input('09:10')),
            "10_11" => json_encode($request->input('10:11')),
            "11_12" => json_encode($request->input('11:12')),
            "12_13" => json_encode($request->input('12:13')),
            "13_14" => json_encode($request->input('13:14')),
            "14_15" => json_encode($request->input('14:15')),
            "15_16" => json_encode($request->input('15:16')),
            "16_17" => json_encode($request->input('16:17')),
            "17_18" => json_encode($request->input('17:18')),
            "18_19" => json_encode($request->input('18:19'))
        ];
        if(schedule::count() > 0){
            $schedule =  schedule::where('id','>',0)->update($data);
        }else{
            $schedule =  schedule::create($data);
        }
        if($schedule){
            return redirect('/admin');
        }
    }
}
